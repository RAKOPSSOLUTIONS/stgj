<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Tarif;
use App\Service\Table;
use App\Form\TarifType;
use App\Form\Search\TarifSearchType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class TarifController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/tarifs", name="tarifs")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/tarif/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/tarifs/table", name="tarifs.table")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/tarifs/{id}/details", name="tarifs.details")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $tarifs = $this->getDoctrine()->getRepository(Tarif::class)->find($id);
    if (!$tarifs) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);
    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("Détails d'un tarif"),
        'body' => $this->renderView('admin/tarif/details.html.twig', [
          'tarifs' => $tarifs
        ])
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/tarifs/create", name="tarifs.create")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->render('admin/tarif/form.html.twig', [
        'entity' => null,
        'title' => $translator->trans("Ajouter un tarif"),
        'form' => $this->getForm($request, $user)->createView()
    ]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/tarifs/{id}/update", name="tarifs.update")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $entity = $this->getDoctrine()->getRepository(Tarif::class)->find($id);

    if (!$entity) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Option not found"),
      ])
    ]);

    return $this->render('admin/tarif/form.html.twig', [
        'entity' => $entity,
        'title' => $translator->trans("Editer un tarif"),
        'form' => $this->getForm($request, $user)->createView()
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/tarifs/{id}/store", name="tarifs.store", defaults={"id"=0})
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
      "tarif",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'tarifs',
      'status' => 'success',
      'message' => $translator->trans("Tarif enregistré avec succès")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/tarifs/{id}/delete", name="tarifs.delete", defaults={"id"=0})
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);

    $this->getDoctrine()->getRepository(Tarif::class)
      ->createQueryBuilder('c')
      ->where('c.id IN(:items)')
      ->setParameter('items', $items)
      ->delete()
      ->getQuery()
      ->execute();

    if (count($items) > 1) {
      $message = $translator->trans("Les tarifs ont été supprimés");
    } else {
      $message = $translator->trans("Le tarif a bien été supprimé");
    }

    return $this->json([
      'tableId' => 'tarifs',
      'status'  => 'success',
      'message' => $message
    ]);
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('category', 'Région', ['sortable' => true]);
    $table->addColumn('zone', 'Zone', ['sortable' => true]);
    $table->addColumn('places', 'Places', ['sortable' => true]);
    $table->addColumn('tarif', 'Tarif', ['sortable' => true]);
    $table->addColumn('status', 'Statut', ['sortable' => true]);

    $table->setPrimaryKey('id');
    $table->setOrder('t.id', 'ASC');
    $table->addAction('edit', [
      //'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/tarifs/[id]/update'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/tarifs/[id]'
    ]);
    /*$table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/tarifs/{$id}/delete";
      },
      'bulk_action' => true
    ]);*/

    $query = $this->getTableQuery($request, $user);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $tarifsRepo = $this->getDoctrine()->getRepository(Tarif::class);
    $query = $tarifsRepo->createQueryBuilder('t');

    // search params
    $keywords = $request->get('q');
    $status = $request->get('status');

    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['t.region, t.zone']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }

    if ($status) {
      $params['status'] = $status;
      $query->andWhere('t.status = :status');
    }
    

    $query->setParameters($params);

    return $query;
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Tarif::class)->find($id);
    } else {
      $entity = new Tarif();
    }
    $form = $this->createForm(TarifType::class, $entity, [
      //'user' => $user,
      'action' => $this->generateUrl('tarifs.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request)
  {
    return $this->createForm(TarifSearchType::class, null, [
      'method' => 'GET',
      'request' => $request,
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

}
