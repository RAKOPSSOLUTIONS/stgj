<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Annonce;
use App\Service\Table;
use App\Form\AnnonceType;
use App\Form\Search\AnnonceSearchType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AnnonceController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/annonces", name="annonces")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/annonce/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/annonces/table", name="annonces.table")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/annonces/{id}/details", name="annonces.details")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $annonces = $this->getDoctrine()->getRepository(Annonce::class)->find($id);
    if (!$annonces) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);
    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("Détails d'une annonce"),
        'body' => $this->renderView('admin/annonce/details.html.twig', [
          'annonces' => $annonces
        ])
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/annonces/create", name="annonces.create")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->render('admin/annonce/form.html.twig', [
        'entity' => null,
        'title' => $translator->trans("Ajouter une annonce"),
        'form' => $this->getForm($request, $user)->createView()
    ]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/annonces/{id}/update", name="annonces.update")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $entity = $this->getDoctrine()->getRepository(Annonce::class)->find($id);

    if (!$entity) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Option not found"),
      ])
    ]);

    return $this->render('admin/annonce/form.html.twig', [
        'entity' => $entity,
        'title' => $translator->trans("Editer une annonce"),
        'form' => $this->getForm($request, $user)->createView()
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/annonces/{id}/store", name="annonces.store", defaults={"id"=0})
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
      "annonce",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'annonces',
      'status' => 'success',
      'message' => $translator->trans("Option enregistrée avec succès")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/annonces/{id}/delete", name="annonces.delete", defaults={"id"=0})
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);

    $this->getDoctrine()->getRepository(Annonce::class)
      ->createQueryBuilder('c')
      ->where('c.id IN(:items)')
      ->setParameter('items', $items)
      ->delete()
      ->getQuery()
      ->execute();

    if (count($items) > 1) {
      $message = $translator->trans("Les annonces ont été supprimées");
    } else {
      $message = $translator->trans("L'annonce a bien été supprimée");
    }

    return $this->json([
      'tableId' => 'annonces',
      'status'  => 'success',
      'message' => $message
    ]);
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('titre', 'Titre', ['sortable' => true]);
    $table->addColumn('dateAnnonce', 'Date', ['sortable' => true]);
    $table->addColumn('message', 'Message', ['sortable' => true]);
    $table->addColumn('destinataire', 'Destinataire', ['sortable' => true]);
    $table->addColumn('status', 'Statut', ['sortable' => true]);

    $table->setPrimaryKey('id');
    $table->setOrder('a.id', 'DESC');
    $table->addAction('edit', [
      //'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/annonces/[id]/update'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/annonces/[id]'
    ]);
    /*$table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/annonces/{$id}/delete";
      },
      'bulk_action' => true
    ]);*/

    $query = $this->getTableQuery($request, $user);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $annoncesRepo = $this->getDoctrine()->getRepository(Annonce::class);
    $query = $annoncesRepo->createQueryBuilder('a');

    // search params
    $keywords = $request->get('q');
    $status = $request->get('status');

    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['a.titre, a.message']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }

    if ($status) {
      $params['status'] = $status;
      $query->andWhere('a.status = :status');
    }
    

    $query->setParameters($params);

    return $query;
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Annonce::class)->find($id);
    } else {
      $entity = new Annonce();
    }
    $form = $this->createForm(AnnonceType::class, $entity, [
      //'user' => $user,
      'action' => $this->generateUrl('annonces.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request)
  {
    return $this->createForm(AnnonceSearchType::class, null, [
      'method' => 'GET',
      'request' => $request,
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

}
