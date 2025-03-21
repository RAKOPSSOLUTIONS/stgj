<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Trajet;
use App\Entity\ReservationEntries;
use App\Entity\Reservation;
use App\Entity\Tarif;
use App\Entity\Pickup;
use App\Service\Table;
use App\Form\TrajetType;
use App\Form\PickupType;
use App\Form\Search\TrajetSearchType;
use App\Controller\BaseController;
use App\Entity\Navette;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Service\RouteOptimizationService;
use Symfony\Component\HttpFoundation\JsonResponse;
class TrajetController extends BaseController
{
  /**
   * @Route(methods={"GET"}, path="/admin/trajets", name="trajets")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/trajet/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/trajets/optimize", name="trajets.optimize")
   * @IsGranted("ROLE_ADMIN")
   */
  public function optimize(Request $request, UserInterface $user, Table $table)
  {
     $trajet = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy(['status' => 'validated', ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/trajets/map", name="trajets.map")
   * @IsGranted("ROLE_ADMIN")
   */
  public function showMap(): Response
  {
    return $this->render('admin/trajet/map.html.twig', [
            'api_key' => $_ENV['GOOGLE_MAPS_API_KEY'],
        ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/trajets/table", name="trajets.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/trajets/{id}/affecter")
   */
  public function affecter(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id', 0);
    $trajet = $this->getDoctrine()->getRepository(Trajet::class)->findById($user, $id);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/trajets/{id}/details", name="trajets.details")
   * @IsGranted("ROLE_ADMIN")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $trajet = $this->getDoctrine()->getRepository(Trajet::class)->find($id);

    if (!$trajet) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);

    return $this->render('admin/trajet/details.html.twig', [
      'trajet' => $trajet,
      'pickups' => $trajet->getPickups(),
      'shifts' => [],
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/trajets/{id}/checkin")
   */
  public function checkin(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id', 0);
    $trajet = $this->getDoctrine()->getRepository(Trajet::class)->findById($user, $id);

    if (!$trajet) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);

    $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)
                    ->findBy(['trajet_id' => $id, 'reservation_date' => new \DateTime()]);
    
    return $this->render('admin/trajet/checkin.html.twig', [
      'trajet' => $trajet,
      'pickups' => $trajet->getPickups(),
      'shifts' => [],
      'entries' => $entries,
    ]);


  }

  /**
   * @Route(methods={"GET"}, path="/admin/trajets/{id}/clone", name="trajets.clone")
   * @IsGranted("ROLE_ADMIN")
   */
  public function clone(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $trajet = $this->getDoctrine()->getRepository(Trajet::class)->find($id);

    if (!$trajet) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);

    $new_trajet = clone $trajet;
    $em = $this->getDoctrine()->getManager();
    $new_trajet->setName($new_trajet->getName(). ' (copie)');
    $em->persist($new_trajet);
    $em->flush();

    //copie des points de ramassage
    foreach ($trajet->getPickups() as $pickup) {
      $new_pickup = clone $pickup;
      $new_pickup->setTrajet($new_trajet);
      $em->persist($new_pickup);
    }
    $em->flush();


    // log activity
    $em->getRepository(Log::class)->store(
      $user->getId(),
      $new_trajet->getId(),
      "trajet",
      'create'
    );

    return $this->redirectToRoute('trajets.details', ['id' => $new_trajet->getId()]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/trajets/create", name="trajets.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => $translator->trans("Ajouter un trajet"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/trajets/{id}/update", name="trajets.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $entity = $this->getDoctrine()->getRepository(Trajet::class)->find($id);

    if (!$entity) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Option not found"),
      ])
    ]);

    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => 'Modifier un trajet',
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/trajets/{id}/store", name="trajets.store", defaults={"id"=0})
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

    //calcul du cout 
    //$tarif = $this->getDoctrine()->getRepository(Tarif::class)->findOneByZone($entity->getZone(), $entity->getVehicule()->getSeats());

    //if ( $tarif ){
      //$entity->setTarif($tarif);
   // }


    $em->persist($entity);
    $em->flush();

    // log activity
    $em->getRepository(Log::class)->store(
      $user_id,
      $entity->getId(),
      "trajet",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'trajets',
      'status' => 'success',
      'message' => $translator->trans("Trajet enregistrée avec succès")
    ]);
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#');
    //$table->addColumn('name', 'Name', ['sortable' => true]);

    $table->addColumn('name', 'Nom', [
      'sortable' => true,
      'render' => function ($entity) {
          $id = $entity->getId();
          
          return "<a href='/admin/trajets/{$id}/details' class='pointer'>{$entity->getName()}</a>";
      }
    ]);

    $table->addColumn('zone', 'Société', ['sortable' => true]);
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
    $table->setOrder('t.id', 'DESC');
    $table->addAction('details', [
      'label' => 'Détail',
      'icon'  => 'bi bi-list-stars',
      'route' => '/admin/trajets/[id]/details'
    ]);
    $table->addAction('edit', [
      'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/trajets/[id]/update'
    ]);

    $table->addAction('clone', [
     // 'type'  => 'modal',
      'label' => 'Dupliquer',
      'icon'  => 'bi bi-bookmarks',
      'route' => '/admin/trajets/[id]/clone'
    ]);

    
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/trajet/[id]'
    ]);
    $table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/trajets/{$id}/delete";
      },
      'bulk_action' => true
    ]);

    $query = $this->getTableQuery($request, $user);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $optionsRepo = $this->getDoctrine()->getRepository(Trajet::class);
    $query = $optionsRepo->createQueryBuilder('t');

    // search params
    $keywords = $request->get('q');
    $trajet_id = $request->get('trajet_id');
    $status = $request->get('status');
    $site = $request->get('site');
   
    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['t.name']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }

    if ($site) {
      $params['site'] = $site;
      $query->andWhere('t.site = :site');
    }
    if ($status) {
      $params['status'] = $status;
      $query->andWhere('t.status = :status');
    }
 
    

    $query->setParameters($params);

    return $query;
  }



/**
 * @Route(methods={"GET"}, path="/admin/trajets/{id}/pickups-table", name="trajets.pickups_table")
 */
public function pickupsTable(Request $request, UserInterface $user, TranslatorInterface $translator)
{
    $id = $request->get('id');
    $trajet = $this->getDoctrine()->getRepository(Trajet::class)->find($id);

    if (!$trajet) {
        return $this->json([
            'status' => 'error', 
            'message' => $translator->trans("Trajet introuvable")
        ]);
    }

    return $this->json([
        'status' => 'success',
        'content' => $this->renderView('admin/trajet/_pickups_table.html.twig', [
            'pickups' => $trajet->getPickups()
        ])
    ]);
}



  /**
   * @Route(methods={"GET", "POST"}, path="/admin/trajets/{id}/pickup", name="trajets.pickup", defaults={"id"=0})
   */
  public function pickup(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id', 0);
    $trajet = $this->getDoctrine()->getRepository(Trajet::class)->find($id);

    $pickup = new Pickup();
    $pickup->setTrajet($trajet);

    $form = $this->createForm(PickupType::class, $pickup, [
      'action' => "/admin/trajets/{$id}/pickup"
    ])->handleRequest($request);

    if ($request->isMethod('post')) {
      $em = $this->getDoctrine()->getManager();
      $entity = $form->getData();
      
      if ( empty($entity->getName()) ) {
        return $this->json([
          'status' => 'error',
          'message' => $translator->trans("Veuillez saisir le nom")
        ]);
      }

      $entity->setTrajet($trajet);

      $em->persist($entity);
      $em->flush();
      // log activity
      $em->getRepository(Log::class)->store($user->getId(), $entity->getId(), 'pickup', 'add');
      


      return $this->json([
        'status' => 'success',
        'message' => $translator->trans("Point de ramassage ajouté avec succès"),
        'tableId' => 'pickups-table'
    ]);
    }

    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'form' => $form->createView(),
        'title' => $translator->trans("Ajouter un point de ramassage"),
      ])
    ]);
  }




  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Trajet::class)->find($id);
    } else {
      $entity = new Trajet();
    }
    $form = $this->createForm(TrajetType::class, $entity, [
      //'user' => $user,
      'action' => $this->generateUrl('trajets.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request)
  {
    return $this->createForm(TrajetSearchType::class, null, [
      'method' => 'GET',
      'request' => $request,
      'vehicule_id' => $request->get('vehicule_id'),
      'chauffeur_id' => $request->get('chauffeur_id'),
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }


  /**
   * @Route(methods={"GET", "POST"}, path="/admin/trajets/{id}/delete", name="trajets.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
      $em = $this->getDoctrine()->getManager();
      $items = $request->get('items', [$request->get('id', 0)]);
      $logRepo = $em->getRepository(Log::class);
      $trajetRepo = $em->getRepository(Trajet::class);
  
      // Fetch the Trajets to be deleted
      $trajets = $trajetRepo->createQueryBuilder('t')
          ->where('t.id IN(:items)')
          ->setParameter('items', $items)
          ->getQuery()
          ->getResult();
  
      $count = 0;
  
      foreach ($trajets as $trajet) {
          // Check if there are no associated ReservationEntries
          $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy(['trajet_id' => $trajet->getId()]);
          if (count($entries) > 0) {
              // Set trajet_id to null in related Reservation entities
              $reservations = $this->getDoctrine()->getRepository(Reservation::class)->findBy(['trajet_entree_id' => $trajet->getId()]);
              foreach ($reservations as $reservation) {
                  $reservation->setTrajetEntree(null);
                  $em->persist($reservation);
              }
  
              $reservations = $this->getDoctrine()->getRepository(Reservation::class)->findBy(['trajet_sortie_id' => $trajet->getId()]);
              foreach ($reservations as $reservation) {
                  $reservation->setTrajetSortie(null);
                  $em->persist($reservation);
              }
  
              // Set trajet_id to null in related ReservationEntries entities
              $reservationEntries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy(['trajet_id' => $trajet->getId()]);
              foreach ($reservationEntries as $entry) {
                  $entry->setTrajet(null);
                  $em->persist($entry);
              }
            }

            $pickups = $this->getDoctrine()->getRepository(Pickup::class)->findBy(['trajet_id' => $trajet->getId()]);
            if (count($pickups) > 0) {
              // Set trajet_id to null in related Pickup entities
              foreach ($pickups as $pickup) {
                  $pickup->setTrajet(null);
                  $em->persist($pickup);
              }
          }

          $Navettes = $this->getDoctrine()->getRepository(Navette::class)->findBy(['trajet_id' => $trajet->getId()]);
          if (count($Navettes) > 0) {
            // Set trajet_id to null in related Pickup entities
            foreach ($Navettes as $Navette) {
                $Navette->setTrajet(null);
                $em->persist($Navette);
            }
          }

          $em->remove($trajet);
          $logRepo->store($user->getId(), $trajet->getId(), 'trajet', 'delete');
          $count += 1;
      }
  
      $em->flush();
  
      return $this->json([
          'tableId' => 'trajets',
          'status'  => $count > 0 ? 'success' : 'info',
          'message' => $translator->trans("%count% trajets(s) supprimé(s)", [
              '%count%' => $count
          ])
      ]);
  }

}
