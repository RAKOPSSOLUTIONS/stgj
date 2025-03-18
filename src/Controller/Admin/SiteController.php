<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Site;
use App\Entity\Trajet;
use App\Service\Table;
use App\Form\SiteType;
use App\Form\Search\SiteSearchType;
use App\Controller\BaseController;
use App\Entity\Reservation;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class SiteController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/sites", name="sites")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/site/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/sites/table", name="sites.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/sites/{id}/details", name="sites.details")
   * @IsGranted("ROLE_ADMIN")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $options = $this->getDoctrine()->getRepository(Site::class)->find($id);
    if (!$options) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);
    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("Détails d'un site"),
        'body' => $this->renderView('admin/site/details.html.twig', [
          'options' => $options
        ])
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/sites/create", name="sites.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => $translator->trans("Ajouter un site"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/sites/{id}/update", name="sites.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $entity = $this->getDoctrine()->getRepository(Site::class)->find($id);

    if (!$entity) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("site not found"),
      ])
    ]);

    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => 'Modifier un site',
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/sites/{id}/store", name="sites.store", defaults={"id"=0})
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
      "site",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'sites',
      'status' => 'success',
      'message' => $translator->trans("site enregistrée avec succès")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/sites/{id}/delete", name="sites.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
      $items = $request->get('items', [$request->get('id', 0)]);
  
      // Get the Doctrine entity manager
      $entityManager = $this->getDoctrine()->getManager();
  
      // Update related entities to set site_id to NULL
      $this->updateRelatedEntities($entityManager, $items);
  
      // Delete the sites
      $this->getDoctrine()->getRepository(Site::class)
          ->createQueryBuilder('c')
          ->where('c.id IN(:items)')
          ->setParameter('items', $items)
          ->delete()
          ->getQuery()
          ->execute();
  
      // Set the success message based on the number of items deleted
      if (count($items) > 1) {
          $message = $translator->trans("Les sites ont été supprimés");
      } else {
          $message = $translator->trans("le site a bien été supprimé");
      }
  
      return $this->json([
          'tableId' => 'sites',
          'status'  => 'success',
          'message' => $message
      ]);
  }
  
  private function updateRelatedEntities($entityManager, $siteIds)
  {
      // Update Trajet entities
      $entityManager->getRepository(Trajet::class)
          ->createQueryBuilder('t')
          ->update()
          ->set('t.site_id', ':nullValue')
          ->where('t.site_id IN(:siteIds)')
          ->setParameter('nullValue', null)
          ->setParameter('siteIds', $siteIds)
          ->getQuery()
          ->execute();
  
      // Update User entities
      $entityManager->getRepository(User::class)
          ->createQueryBuilder('u')
          ->update()
          ->set('u.site_id', ':nullValue')
          ->where('u.site_id IN(:siteIds)')
          ->setParameter('nullValue', null)
          ->setParameter('siteIds', $siteIds)
          ->getQuery()
          ->execute();
  
      // Update Reservation entities
      $entityManager->getRepository(Reservation::class)
          ->createQueryBuilder('r')
          ->update()
          ->set('r.site_id', ':nullValue')
          ->where('r.site_id IN(:siteIds)')
          ->setParameter('nullValue', null)
          ->setParameter('siteIds', $siteIds)
          ->getQuery()
          ->execute();
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('name', 'Name', ['sortable' => true]);
    $table->addColumn('societe', 'Societé', ['sortable' => true]);
    $table->addColumn('latitude', 'latitude', ['sortable' => true]);
    $table->addColumn('longitude', 'longitude', ['sortable' => true]);

    $table->addColumn('status', 'État', [
      'sortable' => true,
      'render' => function($entity) {
        switch($entity->getStatus()) {
          case 'active':
            $class = 'success';
            break;
          case 'inactive':
            $class = 'warning text-dark';
            break;
          default:
            $class = 'secondary';
            break;
        }
        $label = $entity->getStatus();
        return "<span class='badge bg-{$class}'>{$label}</span>";
      }
    ]);

    $table->setPrimaryKey('id');
    $table->setOrder('s.societe_id, s.name', 'ASC');
    $table->addAction('edit', [
      'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/sites/[id]/update'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/site/[id]'
    ]);
    $table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/sites/{$id}/delete";
      },
      'bulk_action' => true
    ]);

    $query = $this->getTableQuery($request, $user);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $optionsRepo = $this->getDoctrine()->getRepository(Site::class);
    $query = $optionsRepo->createQueryBuilder('s');

    // search params
    $keywords = $request->get('q');
    $status = $request->get('status');
    $societe = $request->get('societe');

    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['s.name']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }

    if ($societe) {
      $params['societe'] = $societe;
      $query->andWhere('s.societe = :societe');
    }
    if ($status) {
      $params['status'] = $status;
      $query->andWhere('p.status = :status');
    }
     
    $query->setParameters($params);

    return $query;
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Site::class)->find($id);
    } else {
      $entity = new Site();
    }
    $form = $this->createForm(SiteType::class, $entity, [
      //'user' => $user,
      'action' => $this->generateUrl('sites.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request)
  {
    return $this->createForm(SiteSearchType::class, null, [
      'method' => 'GET',
      'request' => $request,
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }


}
