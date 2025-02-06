<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Shift;
use App\Service\Table;
use App\Form\ShiftType;
use App\Form\Search\ShiftSearchType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class ShiftController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/shifts", name="shifts")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/shift/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/shifts/table", name="shifts.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/shifts/{id}/details", name="shifts.details")
   * @IsGranted("ROLE_ADMIN")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $options = $this->getDoctrine()->getRepository(Shift::class)->find($id);
    if (!$options) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);
    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("Détails d'un shift"),
        'body' => $this->renderView('admin/shift/details.html.twig', [
          'options' => $options
        ])
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/shifts/create", name="shifts.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => $translator->trans("Ajouter un shift"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/shifts/{id}/update", name="shifts.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $entity = $this->getDoctrine()->getRepository(Shift::class)->find($id);

    if (!$entity) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("shift not found"),
      ])
    ]);

    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => 'Modifier un shift',
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/shifts/{id}/store", name="shifts.store", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function store(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    // validate form data
    $form = $this->getForm($request, $user);
    if (!$form->isValid()) {
      return $this->json([
        'status' => 'error',
        'message' => (string) $form->getErrors(true, false)
      ]);
    }
    $user_id = $user->getId();
    $em = $this->getDoctrine()->getManager();
    $entity = $form->getData();
    $isNew = !$entity->getId();
    $em->persist($entity);
    $em->flush();

    // log activity
    $em->getRepository(Log::class)->store(
      $user_id,
      $entity->getId(),
      "shift",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'shifts',
      'status' => 'success',
      'message' => $translator->trans("Shift enregistrée avec succès")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/shifts/{id}/delete", name="shifts.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);

    $this->getDoctrine()->getRepository(Shift::class)
      ->createQueryBuilder('c')
      ->where('c.id IN(:items)')
      ->setParameter('items', $items)
      ->delete()
      ->getQuery()
      ->execute();

    if (count($items) > 1) {
      $message = $translator->trans("Les shift ont été supprimés");
    } else {
      $message = $translator->trans("le shift a bien été supprimé");
    }

    return $this->json([
      'tableId' => 'options',
      'status'  => 'success',
      'message' => $message
    ]);
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('name', 'Name', ['sortable' => true]);
    $table->addColumn('site', 'Site', ['sortable' => true]);
    $table->addColumn('status', 'Statut', ['sortable' => true]);

    $table->setPrimaryKey('id');
    $table->setOrder('s.id', 'DESC');
    $table->addAction('edit', [
      'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/shifts/[id]/update'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/shift/[id]'
    ]);
    /*$table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/shifts/{$id}/delete";
      },
      'bulk_action' => true
    ]);*/

    $query = $this->getTableQuery($request, $user);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $optionsRepo = $this->getDoctrine()->getRepository(Shift::class);
    $query = $optionsRepo->createQueryBuilder('s');

    // search params
    $keywords = $request->get('q');
    $shift = $request->get('shift');
    $direction = $request->get('direction');
    $status = $request->get('status');
    $site = $request->get('site');

    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['s.name']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }

    if ($site) {
      $params['site'] = $site;
      $query->andWhere('s.site = :site');
    }
    if ($status) {
      $params['status'] = $status;
      $query->andWhere('s.status = :status');
    }

    $query->setParameters($params);

    return $query;
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Shift::class)->find($id);
    } else {
      $entity = new Shift();
    }
    $form = $this->createForm(ShiftType::class, $entity, [
      //'user' => $user,
      'action' => $this->generateUrl('shifts.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request)
  {
    return $this->createForm(ShiftSearchType::class, null, [
      'method' => 'GET',
      'request' => $request,
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

}
