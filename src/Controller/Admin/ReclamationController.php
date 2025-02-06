<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Reclamation;
use App\Service\Table;
use App\Form\ReclamationType;
use App\Form\Search\ReclamationSearchType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class ReclamationController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/reclamations", name="reclamations")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/reclamation/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      //'search_form' => $this->getSearchForm($request, $user)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/reclamations/table", name="reclamations.table")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/reclamations/export", name="reclamations.export")
   */
  public function export(Request $request, UserInterface $user, TranslatorInterface $translator, Table $table)
  {
    $format = $request->get('format', 'xlsx');
    $query = $this->getTable($request, $user, $table, true);
    $filename = $translator->trans("Liste des reclamations %date%", ['date' => date('d-m-Y Hi')]);

    return $table->export($query, $filename, $format);
  }


  /**
   * @Route(methods={"GET"}, path="/admin/reclamations/{id}/details", name="reclamations.details")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $reclamationRepo = $this->getDoctrine()->getRepository(Reclamation::class);
    $reclamation = $reclamationRepo->findById($user, $id);

    if (!$reclamation) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Reclamation non trouvée")
      ])
    ]);

    return $this->render('admin/reclamation/details.html.twig', [
      'reclamation' => $reclamation,
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/reclamations/create", name="reclamations.create")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {  
    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => $translator->trans("Ajouter une réclamation"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/reclamations/{id}/update", name="reclamations.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
   
    $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);

    if (!$reclamation) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Réclamation non trouvée"),
      ])
    ]);

    $form = $this->getForm($request, $user);
    $reclamation = $form->getData();

    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => 'Modifier une réclamation',
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
    
  }


  /**
   * @Route(methods={"POST"}, path="/admin/reclamations/{id}/store", name="reclamations.store", defaults={"id"=0})
   */
  public function store(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
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

    if ( $isNew ) {
      $entity->setUser($user);
      $entity->setSociete($user->getSociete());
      //$entity->setCreatedAt(new \DateTime());
      $entity->setStatus('En cours');
    }

    if ( !empty($entity->getReponse()) ){
      $entity->setStatus('Clôturée');
    }

    $em->persist($entity);
    $em->flush();

    // log activity
    $em->getRepository(Log::class)->store(
      $user_id,
      $entity->getId(),
      "reclamation",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'reclamations',
      'status' => 'success',
      'message' => $translator->trans("Réclamation enregistrée avec succès")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/reclamations/{id}/delete", name="reclamations.delete", defaults={"id"=0})
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->findById($user, $id);

    $em = $this->getDoctrine()->getManager();
    $em->remove($reclamation);
    $em->flush();    

    return $this->json([
      'tableId' => 'reclamations',
      'status'  => 'success',
      'message' => $translator->trans("La réclamation a bien été supprimée")
    ]);
  }

  private function getTable($request, $user, $table, $asQuery = false)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('user', 'Utilisateur', ['sortable' => true]);
    $table->addColumn('objet', 'Objet', ['sortable' => true]);
    $table->addColumn('message', 'Message', ['sortable' => true]);
    $table->addColumn('created_at', 'Date', ['sortable' => true]);
    $table->addColumn('reponse', 'Réponse', ['sortable' => true]);
    $table->addColumn('status', 'Statut', ['sortable' => true]);

    $table->setPrimaryKey('id');
    $table->setOrder('r.id', 'DESC');
  
    $table->addAction('edit', [
      'label' => 'Répondre',
      'type'  => 'modal',
      'icon'  => 'bi bi-chat',
      'route' => '/admin/reclamations/[id]/update',
      'display' => function ($entity) use ($user) {
        return $user->isAdmin();
      }
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/reclamations/[id]',
      'display' => function ($entity) use ($user) {
        return $this->isGranted('ROLE_ADMIN');
      }
    ]);
    //$table->addDivider();
    //check if owner and reclamation has 0 links
    /*$table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Delete',
      'icon'  => 'bi bi-x-lg',
      'confirm' => true,
      'route' => '/admin/reclamations/[id]/delete',
      'display' => function ($entity) use ($user) {
        return $this->isGranted('ROLE_ADMIN');
      }
    ]);*/

    $query = $this->getTableQuery($request, $user);

    if ($asQuery) {
      return $query;
    }
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $reclamationsRepo = $this->getDoctrine()->getRepository(Reclamation::class);
    $query = $reclamationsRepo->createQueryBuilder('r');
    if (!$this->isGranted('ROLE_ADMIN')) {
      $params['user_id'] = $user->getId();
      $query->andWhere('r.user_id = :user_id');
    }
    // search params
    $keywords = $request->get('q');
    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['r.objet, r.message']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }
    $query->setParameters($params);

    return $query;
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);
    } else {
      $entity = new Reclamation();
    }

    $form = $this->createForm(ReclamationType::class, $entity, [
      'user' => $user,
      'action' => $this->generateUrl('reclamations.store', ['id' => $id]),
      'em'  => $this->getDoctrine()->getManager()
    ]);
    
    return $form->handleRequest($request);

  }

  private function getSearchForm($request, $user)
  {
    return $this->createForm(ReclamationSearchType::class, null, [
      'method' => 'GET',
      'csrf_protection' => false,
      'user' => $user,
      'request' => $request,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }


}
