<?php
    
namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Navette;
use App\Entity\Reservation;
use App\Entity\ReservationEntries;
use App\Entity\Tarif;
use App\Service\Table;
use App\Form\NavetteType;
use App\Form\Search\NavetteSearchType;
use App\Controller\BaseController;
use App\Entity\MailHistory;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use App\Service\MapQuestService;

//Entrée => 20 minutes avant l'heure de reservation
//Sortie ==> 15 min après l'heure de réservation
//trajet ne doit pas dépasser 50 minutes

class NavetteController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/navettes", name="navettes")
   * @IsGranted("ROLE_MANAGER")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/navette/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }






  
  /**
   * @Route(methods={"GET"}, path="/admin/navettes/mapquest", name="navettes.mapquest")
   * @IsGranted("ROLE_ADMIN")
   */
  public function calculateRoute(MapQuestService $mapQuestService)
  {
    $navette = $this->getDoctrine()->getRepository(Navette::class)->find(36);
    $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy(['navette_id'=> 36]);

    $navette_direction = $navette->getDirection();
    $locations = [];
     foreach ($entries as $entry) {
        $lat = $navette_direction == 'Entrée' ? $entry->getDropoffLatitude() : $entry->getPickupLatitude();
        $lng = $navette_direction == 'Entrée' ? $entry->getDropoffLongitude() : $entry->getPickupLongitude();

        array_push($locations, ['id' => $entry->getId(), 'lat' => $lat, 'lng' => $lng]);
      }

      if ($navette_direction == 'Entrée') {
      $fixedDestination = true;
      $destination = ['id' => 0, 'lat' => $entry->getDropoffLatitude(), 'lng' => -6.8577718]; // Gare RABAT AGDAL
      $locations = array_merge($locations, [$destination]);
    } else {
      $fixedDestination = false;
    }


      print_r($locations);exit;

    $locations = [
      ['id' => 4, 'lat' => 34.0013725, 'lng' => -6.8501119], // Japonezà Sushis-Thaï & Woks
      ['id' => 1, 'lat' => 33.9952424, 'lng' => -6.8479404], // McDonald's
      ['id' => 2, 'lat' => 33.9975624, 'lng' => -6.8488312], // New Camp Language Center
      ['id' => 3, 'lat' => 34.0007872, 'lng' => -6.8499997], // Badr Mosque
    ];

    if ($navette_direction == 'Entrée') {
      $fixedDestination = true;
      $destination = ['id' => 0, 'lat' => 33.9998213, 'lng' => -6.8577718]; // Gare RABAT AGDAL
      $locations = array_merge($locations, [$destination]);
    } else {
      $fixedDestination = false;
    }

    try {
      $pickups = $mapQuestService->getSortedPickups($locations, $fixedDestination);
      return $this->json($pickups);
    } catch (\Exception $e) {
      return $this->json(['error' => $e->getMessage()], 400);
    }
  }

  /**
   * @Route(methods={"GET"}, path="/admin/navettes/table", name="navettes.table")
   * @IsGranted("ROLE_MANAGER")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }


    /**
     * @Route("/navettes/{id}/bulk-add", name="navettes.bulk_add", methods={"POST"})
     */
    public function bulkAdd(Request $request, Navette $navette): JsonResponse
    {
        // Decode the JSON request body
        $data = json_decode($request->getContent(), true);
        $entryIds = $data['entryIds'] ?? [];
        
        $entityManager = $this->getDoctrine()->getManager();
        
        try {
            // Get all entries
            $entries = $entityManager->getRepository(ReservationEntries::class)
                ->findBy(['id' => $entryIds]);
            
            // Update each entry
            foreach ($entries as $entry) {
                $entry->setNavette($navette);
                $entityManager->persist($entry);
            }
            
            $entityManager->flush();
            
            return new JsonResponse(['success' => true]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }



  

  /**
   * @Route(methods={"GET"}, path="/admin/navettes/{id}/add/{entry_id}", name="navettes.add")
   * @IsGranted("ROLE_ADMIN")
   */
  public function add(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $entry_id = $request->get('entry_id');
    $navette = $this->getDoctrine()->getRepository(Navette::class)->find($id);
    $em = $this->getDoctrine()->getManager();
    if ( $navette ){
      $entry = $this->getDoctrine()->getRepository(ReservationEntries::class)->find($entry_id);
      if ( $entry ){
        $entry->setNavette($navette);
        $em->persist($entry);
        $em->flush();

        //update start lat, lng and end  lat, lng  for navette

        $this->addFlash( 'success', "Passager ajouté de cette navette");
      }
    }

    return $this->redirectToRoute('navettes.details', ['id' => $navette->getId()]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/navettes/{id}/detach/{entry_id}", name="navettes.detach")
   * @IsGranted("ROLE_ADMIN")
   */
  public function detach(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $entry_id = $request->get('entry_id');
    $navette = $this->getDoctrine()->getRepository(Navette::class)->find($id);
    $em = $this->getDoctrine()->getManager();
    if ( $navette ){
      $entry = $this->getDoctrine()->getRepository(ReservationEntries::class)->find($entry_id);
      if ( $entry ){
        $entry->setNavette(null);
        $em->persist($entry);
        $em->flush();

        //update start lat, lng and end  lat, lng  for navette


        $this->addFlash( 'success', "Passager supprimé de cette navette");
      }
    }

    return $this->redirectToRoute('navettes.details', ['id' => $navette->getId()]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/navettes/{id}/reset", name="navettes.reset")
   * @IsGranted("ROLE_ADMIN")
   */
  public function reset(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $navette = $this->getDoctrine()->getRepository(Navette::class)->find($id);

    if (!$navette) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);

    $sort = $navette->getDirection() == 'Entrée' ? 'DESC' : 'ASC';
    $entry = $this->getDoctrine()->getRepository(ReservationEntries::class)->findOneBy(['navette_id' => $navette->getId()], ['distance' => $sort]);

    //->getEntry($navette);

    if ( $entry ){

      
      $navette->setPickupLatitude($entry->getPickupLatitude());
      $navette->setPickupLongitude($entry->getPickupLongitude());

    
      $navette->setDropoffLatitude($entry->getDropoffLatitude());
      $navette->setDropoffLongitude($entry->getDropoffLongitude());

      $navette->setPickupLocation($entry->getPickupLocation());
      $navette->setDropoffLocation($entry->getDropoffLocation());

      
      $date = $navette->getDateNavette()->format('Y-m-d');
      $heure = $navette->getHeureNavette();

      $date = new \DateTime($date.' '.sprintf('%02d', $heure-1).':00:00');
      if ( $navette->getDirection() == 'Entrée' ){
         //Entrée => 20 minutes avant l'heure de reservation
         $date->modify('-20 minutes');
         echo $date->format('Y-m-d H:m:i'); 
      }
      else{
         //Sortie ==> 15 min après l'heure de réservation
         $date->modify('+15 minutes');
      }
      
      $navette->setStartAt($date);
      $em = $this->getDoctrine()->getManager();
      $em->persist($entry);
      $em->flush();

      $this->addFlash( 'success', "Mise à jout de la navette avec succès");
     
    }

    return $this->redirectToRoute('navettes.details', ['id' => $navette->getId()]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/navettes/{id}/details", name="navettes.details")
   * @IsGranted("ROLE_MANAGER")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {


      // Exemple de données pour les routes
      $routes = [
        ['id' => 1, 'nom_trajet' => 'Route A'],
        ['id' => 2, 'nom_trajet' => 'Route B'],
        ['id' => 3, 'nom_trajet' => 'Route C'],
    ];

   

    $id = $request->get('id');
    $navette = $this->getDoctrine()->getRepository(Navette::class)->find($id);

    if ( !$navette or !$user->isAdmin() ) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);

    $sort = $navette->getDirection() == 'Entrée' ?  'ASC' : 'DESC';

    $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy(['navette_id' => $id], ['heure_passage' => $sort]);
    $positions = $origin = $destination = array();

    $unaffected_entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->getNotAffected($navette);

    $items = [];
    $key = 0;
    foreach ($entries as $entry) {
      $pickupLatitude = $entry->getPickupLatitude();
      $pickupLongitude = $entry->getPickupLongitude();
      $dropoffLatitude = $entry->getDropoffLatitude();
      $dropoffLongitude = $entry->getDropoffLongitude();
      $key = $pickupLatitude.$pickupLongitude;
      if ( $navette->getDirection() == 'Entrée' ){
        
        if ( !array_key_exists($key, $items)) {
          $positions[] = array('id' => $entry->getId(), 'lat' => $pickupLatitude, 'lng' => $pickupLongitude);
          $items[$key] = 0 ;
        }
        
        $items[$key] += 1 ;

        $origin = array('lat' => $pickupLatitude, 'lng' => $pickupLongitude); 
        $destination = array('lat' => $dropoffLatitude, 'lng' => $dropoffLongitude);
      }
      else{
        if ( !array_key_exists($key, $items)) {
        $positions[] = array('id' => $entry->getId(), 'lat' => $dropoffLatitude, 'lng' => $dropoffLongitude);
        $items[$key] = 0 ;
        }
        
        $items[$key] += 1 ;
        
        $origin = array('lat' => $dropoffLatitude, 'lng' => $dropoffLongitude);
        $destination = array('lat' => $pickupLatitude, 'lng' => $pickupLongitude); 
      }
    }

    // prepare google map data
    if (count($positions) > 0) {
      if ($navette->getDirection() == 'Entrée') {
        $first_position = reset($positions);
        $map_origin = ['lat' => $first_position['lat'], 'lng' => $first_position['lng']];
        $map_destination = ['lat' => $destination['lat'], 'lng' => $destination['lng']];
        $map_pickups = array_map(fn($p) => ['lat' => $p['lat'], 'lng' => $p['lng']], $positions);
        if ($map_pickups > 1) {
          array_shift($map_pickups);
        }
      } else {
        $last_position = end($positions);
        $map_origin = ['lat' => $origin['lat'], 'lng' => $origin['lng']];
        $map_destination = ['lat' => $last_position['lat'], 'lng' => $last_position['lng']];
        $map_pickups = array_map(fn($p) => ['lat' => $p['lat'], 'lng' => $p['lng']], $positions);
        if ($map_pickups > 1) {
          array_pop($map_pickups);
        }
      }
    } else {
      $map_origin = [];
      $map_destination = [];
      $map_pickups = [];
    }

    //calculer la duree
    //calculter heure de depart et heure d'arrivé 
    $navetteData = [
      'id' => $navette->getId(),
      'userId' => $navette->getUser() ? $navette->getUser()->getId() : null,
      'vehiculeId' => $navette->getVehicule() ? $navette->getVehicule()->getId() : null,
      'trajetId' => $navette->getTrajet() ? $navette->getTrajet()->getId() : null,
      'societeId' => $navette->getSociete() ? $navette->getSociete()->getId() : null,
      'tarif' => $navette->getTarif(),
      'dateNavette' => $navette->getDateNavette() ? $navette->getDateNavette()->format('Y-m-d') : null,
      'startAt' => $navette->getStartAt() ? $navette->getStartAt()->format('Y-m-d H:i:s') : null,
      'endAt' => $navette->getEndAt() ? $navette->getEndAt()->format('Y-m-d H:i:s') : null,
      'direction' => $navette->getDirection(),
      'zone' => $navette->getZone(),
      'heureNavette' => $navette->getHeureNavette(),
      'status' => $navette->getStatus(),
      'comment' => $navette->getComment(),
      'duree' => $navette->getDuree(),
      'distance' => $navette->getDistance(),
      'dureeUp' => $navette->getDureeUp(),
      'distanceUp' => $navette->getDistanceUp(),
      'pickupLatitude' => $navette->getPickupLatitude(),
      'pickupLongitude' => $navette->getPickupLongitude(),
      'dropoffLatitude' => $navette->getDropoffLatitude(),
      'dropoffLongitude' => $navette->getDropoffLongitude(),
      'pickupLocation' => $navette->getPickupLocation(),
      'dropoffLocation' => $navette->getDropoffLocation(),
      'nomTrajet' => $navette->getNomTrajet()
  ];

  $entriesData = array_map(function($entry) {
      return [
          'id' => $entry->getId(),
          'navetteId' => $entry->getNavette() ? $entry->getNavette()->getId() : null,
          'pickupLatitude' => $entry->getPickupLatitude(),
          'dureeUp' => $entry->getDureeUp(),
          'pickupLongitude' => $entry->getPickupLongitude(),
          'dropoffLatitude' => $entry->getDropoffLatitude(),
          'dropoffLongitude' => $entry->getDropoffLongitude(),
          'pickupLocation' => $entry->getPickupLocation(),
          'heurePassage' => $entry->getHeurePassage() ? $entry->getHeurePassage()->format('Y-m-d H:i:s') : null,
      ];
  }, $entries);

    return $this->render('admin/navette/details.html.twig', [
      'navette' => $navette,
      'navetteData' => $navetteData,
      'entriesData' => $entriesData,
      'entries' => $entries,
      'origin' => $origin,
      'destination' => $destination,
      'positions' => $positions,
      'unaffected_entries' => $unaffected_entries,
      'map_origin' => $map_origin,
      'map_destination' => $map_destination,
      'map_pickups' => $map_pickups,
      'routes' => $routes, 
    ]);
  }
/**
 * @Route(methods={"POST"}, path="/admin/navettes/{id}/reserver", name="navettes.reserver")
 * @IsGranted("ROLE_MANAGER")
 */
/**    * @Route(methods={"POST"}, path="/admin/navettes/{id}/reserver", name="navettes.reserver")    
 * * @IsGranted("ROLE_MANAGER")    */


public function reserver(Request $request, Navette $navette, EntityManagerInterface $em)
{
    try {
        $data = json_decode($request->getContent(), true);
        $entryRepo = $em->getRepository(ReservationEntries::class);

        $dateNavette = $navette->getDateNavette(); // This should already be a DateTime object
        $startTimeString = $data['navette']['starttime'];
        $startAt = new \DateTime($dateNavette->format('Y-m-d') . ' ' . $startTimeString);
        $navette->setStartAt($startAt);

        // Process entries
        foreach ($data['entries'] as $entry) {
            if ($entryEntity = $entryRepo->find($entry['id'])) {
                $entryEntity->setDuree($entry['duree']);
                $entryEntity->setDistance($entry['distance']);
                $passageTime = clone $startAt;
                $passageTime->modify('+' . $entry['duree'] . ' minutes');
                $entryEntity->setHeurePassage($passageTime);
                $em->persist($entryEntity);
            }
        }

        $totalTime = $data['navette']['totalTime'];
        $endAt = clone $startAt;
        $endAt->modify('+' . $totalTime . ' minutes');
        $navette->setEndtAt($endAt);

        $navette->setDuree($data['navette']['totalTime']);
        $navette->setDistance($data['navette']['totalDistance']);

        $em->persist($navette);
        $em->flush();

        return new JsonResponse(['status' => 'success']);
    } catch (\Exception $e) {
        // Log the error and return it
        return new JsonResponse([
            'status' => 'error',
            'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
        ], 500);
    }
}



  /**
   * @Route(methods={"GET"}, path="/admin/navettes/batch", name="navettes.batch")
   * @IsGranted("ROLE_ADMIN")
   */
  public function batch(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $today = new \DateTime("now");
    $date = $today->modify('+1 day');
    $direction = 'Entrée';
    $location = 'dropoffLocation';
    $em = $this->getDoctrine()->getManager();

    $items = $this->getDoctrine()->getRepository(ReservationEntries::class)->findEntriesToAffect($direction, $date, $location);

    print_r($items);exit;
    foreach ($items as $item) {
      $reservation_heure = $item['reservation_heure'];
      $count_all = $item['count_all'];
      $dropoffLocation = $item['dropoffLocation'];

      if ( count($count_all) > 0 ){
        $new_navette = new Navette();
        $new_navette->setReservationDate($date);
        $new_navette->setReservationHeure($reservation_heure);
        $new_navette->setDirection($direction);
        $new_navette->setStatus('en attente');
        $new_navette->setVehicule(null);
        $em->persist($new_navette);
        $em->flush();

        $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy(['reservation_date' => $date, 'status' => 'validée', 'navette_id' => null, 'direction' => $direction, 'reservation_heure' => $reservation_heure], ['pickup_location' => 'ASC', 'distance', 'DESC']);
        foreach ($entries as $entry) {
          $entry->setNavette($new_navette);
          $em->persist($entry);
          //update cordinates and location of navette
          $new_navette->setDropoffLatitude($entry->getDropoffLatitude());
          $new_navette->setDropoffLongitude($entry->getDropoffLongitude());
          $new_navette->setDropoffLocation($entry->getDropoffLocation());

        }

        $em->flush();



      }

      
      
    }

     /* $sort = $direction == 'Entrée' ? ['dropoff_location' => 'ASC', 'distance', 'DESC'] : ['pickup_location' => 'ASC', 'distance', 'ASC'];

      $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy(['reservation_date' => $date, 'status' => 'validée', 'navette_id' => null, 'direction' => 'Entrée'], ['pickup_location' => 'ASC', 'distance', 'DESC']);
      
      $i = 0;
      $items = [];
      $distance = 0;
  
        foreach ($entries as $entry) {
          $heure = $entry->getReservationHeure();
          $date = $entry->getReservationDate();
          $direction = $entry->getDirection();
          $dropoff_location = $entry->getDropoffLocation();
          $pickup_location = $entry->getPickupLocation();
          $id = $entry->getId();
          $distance = $entry->getDistance();

          $key = $date.$heure.$dropoff_location;

          if ( !array_key_exists($key, $items) ) {
            $items[$key] = [];
            //create 

          }

          if ( $direction == 'Entrée'){
            //le plus loin
            $pickup = '';
            //le site
            $dropoff = $entry->getDropoffLocation();
          }
          else{
            //le site
            $pickup = '';
            //le plus proche
            $dropoff = '';
            
         
          $key = '';
          }
        }
      }


    }

    $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy(['reservation_date' => $date, 'status' => 'validée', 'navette_id' => null]);

    $groupes = [];


    if ( count($entries) > 0 ){

        foreach ($entries as $entry) {
          $heure = $entry->getReservationHeure();
          $direction = $entry->getDirection();
          $date = $entry->getReservationHeure();
        //$trajet = $entry->getDirection();
          $key = '';
    }
     

    $new_navette = new Navette();
    $em = $this->getDoctrine()->getManager();
    $new_navette->setStatus('en attente');
    $new_navette->setVehicule(null);
    $em->persist($new_navette);
    $em->flush();

    // log activity
    $em->getRepository(Log::class)->store(
      $user->getId(),
      $new_navette->getId(),
      "navette",
      'create'
    );

    }*/

   
  }


  /**
   * @Route(methods={"GET"}, path="/admin/navettes/{id}/clone", name="navettes.clone")
   * @IsGranted("ROLE_ADMIN")
   */
  public function clone(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $navette = $this->getDoctrine()->getRepository(Navette::class)->find($id);

    if (!$navette) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);

    $new_navette = clone $navette;
    $em = $this->getDoctrine()->getManager();
    $new_navette->setStatus('en attente');
    $new_navette->setVehicule(null);
    $em->persist($new_navette);
    $em->flush();

    // log activity
    $em->getRepository(Log::class)->store(
      $user->getId(),
      $new_navette->getId(),
      "navette",
      'create'
    );

    return $this->redirectToRoute('navettes.details', ['id' => $new_navette->getId()]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/navettes/{id}/checkin")
   */
  public function checkin(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id', 0);
    $navette = $this->getDoctrine()->getRepository(Navette::class)->findById($user, $id);

    if (!$navette) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);

    $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)
                    ->findBy(['navette_id' => $id, 'reservation_date' => new \DateTime()]);
    
    return $this->render('admin/navette/checkin.html.twig', [
      'navette' => $navette,
      'pickups' => $navette->getPickups(),
      'shifts' => [],
      'entries' => $entries,
    ]);


  }

  /**
   * @Route(methods={"GET"}, path="/admin/navettes/create", name="navettes.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => $translator->trans("Ajouter une navette"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/navettes/{id}/update", name="navettes.update")
   * @IsGranted("ROLE_MANAGER")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $entity = $this->getDoctrine()->getRepository(Navette::class)->find($id);

    if (!$entity) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Option not found"),
      ])
    ]);

    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => 'Modifier un navette',
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/navettes/{id}/store", name="navettes.store", defaults={"id"=0})
   * @IsGranted("ROLE_MANAGER")
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

    /*if ( $entity->getTrajet() ){
      $trajet = $entity->getTrajet();
      $entity->setUser($trajet->getUser());
      $entity->setVehicule($trajet->getVehicule());
      //get Tarif

      //calcul du cout 
      if ( $entity->getVehicule() ){
        $tarif = $this->getDoctrine()->getRepository(Tarif::class)->findOneByZone($entity->getZone(), $entity->getVehicule()->getSeats());
        if ( $tarif ){
          $entity->setTarif($tarif->getTarif());
        }
      }
      
    }*/


    $em->persist($entity);
    $em->flush();

    // log activity
    $em->getRepository(Log::class)->store(
      $user_id,
      $entity->getId(),
      "navette",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'navettes',
      'status' => 'success',
      'message' => $translator->trans("Navette enregistrée avec succès")
    ]);
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#', ['class' => 'text-danger']);
    $table->addColumn('id', 'Id', ['sortable' => true]);
    $table->addColumn('zone', 'Zone', ['sortable' => true]);
    $table->addColumn('nomTrajet', 'Trajet', ['sortable' => true]);
    $table->addColumn('dureeUp', 'Durée', [
      'sortable' => true,
      'render' => function($entity) {
          // Check if dureeUp is null, if so, return duree
          return $entity->getDureeUp() ?? $entity->getDuree();
      }
  ]);
  
  $table->addColumn('distanceUp', 'KM', [
      'sortable' => true,
      'render' => function($entity) {
          // Check if distanceUp is null, if so, return distance
          return $entity->getDistanceUp() ?? $entity->getDistance();
      }
  ]);
    $table->addColumn('vehicule.immatriculation', 'Véhicule', ['sortable' => true]);


  



    $table->addColumn('societe_id', 'Passagers', [
      'sortable' => true,
      'render' => function($entity) {
          // Fetch the entries and order them by heure_passage (make sure to fetch them sorted)
          $entries = $entity->getEntries()->toArray(); // Ensure entries are in an array
          if (empty($entries)) {
              return '<span class="badge rounded-pill bg-secondary">0<span>';
          }
  
          // Collect content for the modal
          $content = '';
          if ($entity->getVehicule() && $entity->getVehicule()->getUser()) {
              $content .= '<b>Chauffeur : </b>' . $entity->getVehicule()->getUser();
              $content .= '<br /><b>Téléphone : </b>' . $entity->getVehicule()->getUser()->getTelephone() .'<br>';
          }
  
          $content .= '<br/><h6>Passagers:</h6>';
          $content .= '<table class="table table-striped"><thead><tr><th>Nom</th><th>Matricule</th><th>Pickup</th><th>Dropoff</th><th>Heure de passage</th></tr></thead><tbody>';
  
          // Manually sort entries if not already sorted by Doctrine query
          usort($entries, function($a, $b) {
              $heure_passage_a = $a->getHeurePassage();
              $heure_passage_b = $b->getHeurePassage();
              return $heure_passage_a <=> $heure_passage_b;
          });
  
          // Loop through sorted entries and display them
          foreach ($entries as $entry) {
              $heure_passage = $entry->getHeurePassage() ? $entry->getHeurePassage()->format('H:i') : '';
              $name = $entry->getUser()->getNom() . ' ' . $entry->getUser()->getPrenom();
              $matricule = $entry->getUser()->getMatricule();
              $pickup = $entry->getPickupLocation();
              $dropoff = $entry->getDropoffLocation();
  
              $content .= '<tr><td>' . $name . '</td><td>' . $matricule . '</td><td>' . $pickup . '</td><td>' . $dropoff . '</td><td>' . $heure_passage . '</td></tr>';
          }
  
          $content .= '</tbody></table>';
  
          // Add background class for status
          $bg = $entity->getStatus() == 'annulée' ? 'bg-danger' : 'bg-success';
  
          // Modal ID
          $modalId = 'modal-' . $entity->getId(); // Unique modal ID
          $badge = '<span class="badge rounded-pill ' . $bg . '" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#' . $modalId . '">' . count($entries) . '</span>';
  
          // Modal HTML (this should be placed at the bottom of your page, or rendered conditionally)
          $modal = '
          <div class="modal fade" id="' . $modalId . '" tabindex="-1" aria-labelledby="modalLabel-' . $modalId . '" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="modalLabel-' . $modalId . '">Details</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          ' . $content . '
                      </div>
                  </div>
              </div>
          </div>
          
          <style>
              /* Modal Table Styling */
              .modal-body table {
                  width: 100%;
                  border-collapse: collapse;
              }
  
              .modal-body table th, .modal-body table td {
                  padding: 10px;
                  text-align: left;
                  border: 1px solid #ddd;
              }
  
              .modal-body table th {
                  background-color: #f8f9fa;
                  font-weight: bold;
              }
  
              .modal-body table tr:nth-child(even) {
                  background-color: #f2f2f2;
              }
  
              .modal-body table td {
                  word-wrap: break-word;
              }
  
              /* Ensure modal is not too large */
              .modal-lg {
                  max-width: 90%;
              }
          </style>';
  
          // Return both the badge and modal (ensure modals are only rendered once)
          return $badge . $modal;
      }
  ]);
  


  



     
    $table->addColumn('vehicule.seats', 'Cap navette', ['sortable' => true]);
    $table->addColumn('vehicule_id', 'Taux d\'occupation', [
      'sortable' => true,
      'render' => function($entity) {
        $entries_count = count($entity->getEntries());
        if ( $entity->getVehicule() && $entity->getVehicule()->getSeats() >0 & $entries_count >0  ){
          $count = round(($entries_count/$entity->getVehicule()->getSeats())*100 , 2);
          return $count.'%';
        }
        return '';
      }
    ]);
    $table->addColumn('vehicule.seats', 'Capacité', ['sortable' => true]);

    $table->addColumn('cap', 'Cap navette réelle', [
      'sortable' => true,
      'render' => function($entity) {
        $count = count($entity->getEntries());
        if ( $count < 8 ){
          return 7;
        }
        else if ($count > 7 && $count < 15 ){
           return 14;
        }
         else if ($count > 14 && $count < 19 ){
          return 17;
        }
         else if ($count > 17 && $count < 25 ){
          return 24;
        }
        else if ($count > 24 && $count < 28 ){
          return 27;
        }
        else {
          return '';
        }
         
      }
        
    ]);

    $table->addColumn('taux', 'Taux d\'occupation réel', [
      'sortable' => true,
      'render' => function($entity) {
        $count = count($entity->getEntries());
        $cap = 0;
        if ( $count < 8 ){
          $cap = 7;
        }
        else if ($count > 7 && $count < 15 ){
           $cap = 14;
        }
         else if ($count > 14 && $count < 19 ){
          $cap = 17;
        }
         else if ($count > 17 && $count < 25 ){
          $cap = 24;
        }
        else if ($count > 24 && $count < 28 ){
          $cap = 27;
        }
        

        $taux = ( $count > 0 && $cap > 0 )  ? round($count/$cap, 2)*100 : '';
        return $taux .'%';

      }
    ]);

    
    if ( $user->getRoleName() != 'manager' ){
      $table->addColumn('vehicule.user', 'Chauffeur', ['sortable' => true]);
    }
    

    $table->addColumn('date_navette', 'Date', [
      'sortable' => true,
      'render' => function($entity) {
        return $entity->getDateNavette()->format('Y-m-d');
      }
    ]);
     $table->addColumn('heure_navette', 'Heure', ['sortable' => true]);
     $table->addColumn('direction', 'Direction', ['sortable' => true]);


    
    //$table->addColumn('heure_navette', 'Heure', ['sortable' => true]);
    $table->addColumn('tarif', 'Coût', ['sortable' => true]);

    $table->addColumn('tarif', 'Coût', [
      'sortable' => true,
      'render' => function($entity) {
        $count = count($entity->getEntries());
        $cap = 0;
        if ( $count < 8 ){
          $cap = 7;
        }
        else if ($count > 7 && $count < 15 ){
           $cap = 14;
        }
         else if ($count > 14 && $count < 19 ){
          $cap = 17;
        }
         else if ($count > 17 && $count < 25 ){
          $cap = 24;
        }
        else if ($count > 24 && $count < 28 ){
          $cap = 27;
        }

        if ( $cap == 7 ){
          return 195;
        }
        else if ($cap == 14 or $cap == 17 ){
          return 220;
        }
        else if ($cap == 24 ){
          return 240;
        }
        else if ($cap == 27 ){
          return 245;
        }
        else{
          return '-';
        }

      }
    ]);

    $table->addColumn('status', 'État', [
      'sortable' => true,
      'render' => function($entity) {
        switch($entity->getStatus()) {
          case 'validée':
            $class = 'success';
            break;
          case 'en attente':
            $class = 'danger text-white';
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
    //$table->setOrder('DATE(n.date_navette)', 'DESC'); //, n.direction, n.heure_navette
    $table->addAction('details', [
      'label' => 'Détail',
      'icon'  => 'bi bi-list-stars',
      'route' => '/admin/navettes/[id]/details',
      'display' => function ($entity) use ($user) {
        return $this->isGranted('ROLE_ADMIN');
      }

    ]);
    $table->addAction('edit', [
      'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/navettes/[id]/update',
      'display' => function ($entity) use ($user) {
        return $this->isGranted('ROLE_ADMIN');
      }
    ]);
    $table->addAction('enable', [
      'icon'  => 'bi bi-toggle-on',
      'route' => '/admin/navettes/[id]/enable',
      'label' => 'Valider',
      'display' => function($entity) {
        return $this->isGranted('ROLE_ADMIN') && $entity->getStatus() == 'commandée';
      },
      'bulk_action' => true
    ]);

    $table->addAction('precommande', [
      'type'  => 'modal',
      'label' => 'Pré commande',
      'icon'  => 'bi bi-check-lg',
      'route' => '/admin/navettes/[id]/precommande',
      'display' => function ($entity) {
        return $this->isGranted('ROLE_ADMIN') && $entity->getStatus() == 'en attente';
      },
      'confirm' => true
    ]);

    $table->addAction('order', [
      'icon'  => 'bi bi-cart',
      'route' => '/admin/navettes/[id]/order',
      'label' => 'Commander',
      'display' => function($entity) {
        return $this->isGranted('ROLE_MANAGER') && in_array($entity->getStatus(), ['annulée', 'pré commande']);
      },
      'bulk_action' => true
    ]);


    $table->addAction('comment', [
      'type'  => 'modal',
      'label' => 'Commentaire',
      'icon'  => 'bi bi-chat',
      'route' => '/admin/navettes/[id]/comment',
      'display' => function($entity) use ($user) {
        return $this->isGranted('ROLE_MANAGER') && in_array($entity->getStatus(), ['annulée', 'pré commande']);
      }
    ]);
    
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/navette/[id]'
    ]);
    $table->addDivider();

    $table->addAction('cancel', [
      'type'  => 'modal',
      'label' => 'Annuler',
      'icon'  => 'bi bi-bi-arrow-counterclockwise',
      'route' => '/admin/navettes/[id]/cancel',
      'display' => function ($entity) {
        return $this->isGranted('ROLE_MANAGER') && !in_array($entity->getStatus(), ['annulée', 'commencée', 'terminée']);
      },
      'confirm' => true
    ]);

    $table->addAction('notify', [
      'type'  => 'modal',
      'label' => 'Notifier',
      'icon'  => 'bi bi-envelope-open',
      'route' => '/admin/navettes/[id]/notify',
      'display' => function ($entity) {
        return $this->isGranted('ROLE_ADMIN') && $entity->getStatus() == 'annulée';
      },
      'confirm' => true
    ]);

    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/navettes/{$id}/delete";
      },
      'display' => function ($entity) use ($user) {
        return $this->isGranted('ROLE_ADMIN') && $entity->getStatus() == 'en attente';
      },
      'bulk_action' => $this->isGranted('ROLE_ADMIN')
    ]);

    $query = $this->getTableQuery($request, $user);

    //date navette DESC, direction entree puis sortie, heure ASC
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $optionsRepo = $this->getDoctrine()->getRepository(Navette::class);
    $query = $optionsRepo->createQueryBuilder('n');

    // search params
    $keywords = $request->get('q');
    $trajet_id = $request->get('navette_id');
    $societe_id = $request->get('societe_id');
    $vehicule_id = $request->get('vehicule_id');
    $status = $request->get('status');
    $chauffeur_id = $request->get('chauffeur_id');
    $direction = $request->get('direction');
    $heure = $request->get('heure');

    $date = $request->get('date');

    //if manager only //pré commande

     

    if ($date) {
      $params['date'] = new \DateTime($date);
      $query->andWhere('n.date_navette = :date');
    }
    else if ($user->getRoleName()=='manager') {
      $today = new \DateTime("now");
      $params['date'] = $today->modify('+1 day');
      $query->andWhere('n.date_navette = :date');
    }

    if ( in_array('ROLE_MANAGER', $user->getRoles(), true) ) {
      $authorized_status = ['pré commande', 'annulée', 'commandée', 'validée'];
      if ( in_array($status, $authorized_status)){
        $params['status'] = $status;
        $query->andWhere('n.status = :status');
      }
      else{
        $params['status'] = $authorized_status;
        $query->andWhere('n.status IN(:status)');
      }
    }
    else if ($status) {
      $params['status'] = $status;
      $query->andWhere('n.status = :status');
    }

    if ($direction) {
      $params['direction'] = $direction;
      $query->andWhere('n.direction = :direction');
    }
    if ($heure) {
      $params['heure'] = $heure;
      $query->andWhere('n.heure_navette = :heure');
    }

    if ($trajet_id) {
      $params['trajet_id'] = $trajet_id;
      $query->andWhere('n.trajet_id = :trajet_id');
    }
    if ($societe_id) {
      $params['societe_id'] = $societe_id;
      $query->andWhere('n.societe_id = :societe_id');
    }
    if ($vehicule_id) {
      $params['vehicule_id'] = $vehicule_id;
      $query->andWhere('n.vehicule_id = :vehicule_id');
    }
    if ($chauffeur_id) {
      $params['chauffeur_id'] = $chauffeur_id;
      $query->andWhere('n.user_id = :chauffeur_id');
    }

    $query->setParameters($params);

    return $query;
  }



  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Navette::class)->find($id);
    } else {
      $entity = new Navette();
    }
    $form = $this->createForm(NavetteType::class, $entity, [
      'user' => $user,
      'action' => $this->generateUrl('navettes.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request)
  {
    return $this->createForm(NavetteSearchType::class, null, [
      'method' => 'GET',
      'request' => $request,
      'vehicule_id' => $request->get('vehicule_id'),
      'chauffeur_id' => $request->get('chauffeur_id'),
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/navettes/{id}/precommande", name="navettes.precommande")
   * @IsGranted("ROLE_ADMIN")
   */
  public function precommande(Navette $navette, TranslatorInterface $translator, EntityManagerInterface $em)
  {
    if (in_array($navette->getStatus(), ['annulée', 'commencée', 'terminée'])) {
      return $this->json([
        'status'  => 'error',
        'message' => $translator->trans("Vous ne pouvez pas modifier cette navette")
      ]);
    }

    $navette->setStatus('pré commande');
    $em->persist($navette);
    $em->flush();

    return $this->json([
      'tableId' => 'navettes',
      'status'  => 'success',
      'message' => $translator->trans("La navette a bien été passée en pré commande")
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/navettes/{id}/cancel", name="navettes.cancel")
   * @IsGranted("ROLE_MANAGER")
   */
  public function cancel(Navette $navette, TranslatorInterface $translator, EntityManagerInterface $em)
  {
    if (in_array($navette->getStatus(), ['annulée', 'commencée', 'terminée'])) {
      return $this->json([
        'status'  => 'error',
        'message' => $translator->trans("Vous ne pouvez pas annuler cette navette")
      ]);
    }

    $navette->setStatus('annulée');
    $em->persist($navette);
    $em->flush();

    $users = $em->getRepository(User::class)
      ->createQueryBuilder('u')
      ->join(ReservationEntries::class, 'e', 'WITH', 'e.user = u')
      ->where('e.navette = :navette')
      ->setParameter('navette', $navette)
      ->getQuery()
      ->getResult();

    /*if (!empty($users)) {
      $trajet = $navette->getTrajet()->getName();
      $date = $navette->getDateNavette()->format('d/m/Y');
      $heure = $navette->getHeureNavette();
      foreach ($users as $user) {
        $em->getRepository(MailHistory::class)->log([
          'template' => 'navette-annulee',
          'receiver' => $user->getEmail(),
          'subject' => 'STJG - Annulation de la navette du {date}',
          'variables' => ['trajet' => $trajet, 'date' => $date, 'heure' => $heure]
        ]);
      }
    }*/

    return $this->json([
      'tableId' => 'navettes',
      'status'  => 'success',
      'message' => $translator->trans("La navette a bien été annulée")
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/navettes/{id}/notify", name="navettes.notify")
   * @IsGranted("ROLE_ADMIN")
   */
  public function Notify(Navette $navette, TranslatorInterface $translator, EntityManagerInterface $em)
  {
    if ($navette->getStatus() != 'annulée') {
      return $this->json([
        'status'  => 'error',
        'message' => $translator->trans("Vous ne pouvez envoyer des notifications que pour une navette annulée")
      ]);
    }

    $users = $em->getRepository(User::class)
      ->createQueryBuilder('u')
      ->join(ReservationEntries::class, 'e', 'WITH', 'e.user = u')
      ->where('e.navette = :navette')
      ->setParameter('navette', $navette)
      ->getQuery()
      ->getResult();

    if (!empty($users)) {
      $trajet = $navette->getTrajet()->getName();
      $date = $navette->getDateNavette()->format('d/m/Y');
      $heure = $navette->getHeureNavette();
      foreach ($users as $user) {
        $em->getRepository(MailHistory::class)->log([
          'template' => 'navette-annulee',
          'receiver' => $user->getEmail(),
          'subject' => 'STJG - Annulation de la navette du {date}',
          'variables' => ['trajet' => $trajet, 'date' => $date, 'heure' => $heure]
        ]);
      }
    }

    return $this->json([
      'tableId' => 'navettes',
      'status'  => 'success',
      'message' => $translator->trans("La notification a été envoyée")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/navettes/{id}/delete", name="navettes.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $navette = $this->getDoctrine()->getRepository(Navette::class)->find($id);

    //check if navette hase entries 
    $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy(['navette_id' => $id]);

    if ( count($entries) > 0 ){

      return $this->json([
      'tableId' => 'navettes',
      'status'  => 'success',
      'message' => $translator->trans("Vous ne pouvez pas supprimer cette navette")
      ]);

    }


    $em = $this->getDoctrine()->getManager();
    $em->remove($navette);
    $em->flush();    

    return $this->json([
      'tableId' => 'navettes',
      'status'  => 'success',
      'message' => $translator->trans("La navette a bien été supprimée")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/navettes/{id}/enable", name="navettes.enable")
   * @IsGranted("ROLE_ADMIN")
   */
  public function enable(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);
    $current_user = $user;
    $navettes = $this->getDoctrine()->getRepository(Navette::class)->findBy(['id' => $items]);
    $em = $this->getDoctrine()->getManager();
     

      foreach ($navettes as $navette) {
         
      
    $navette_id = $navette->getId();
    $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy(
    ['navette_id'=>$navette_id]); 

    if ( $navette->getStatus() == 'commandée' ){
        
         
        $navette->setStatus('validée');
        $em->persist($navette);
        $em->flush();


    $entries = $em->getRepository(ReservationEntries::class)
      ->createQueryBuilder('e')
      ->where('e.navette_id = :navette_id')
      ->setParameter('navette_id', $navette_id)
      ->getQuery()
      ->getResult();

    if (!empty($entries)) {
      
      $trajet = $navette->getNomTrajet();
      $date = $navette->getDateNavette()->format('d/m/Y');
      $heure = $navette->getHeureNavette();
      $matricule = $navette->getVehicule() ? $navette->getVehicule()->getImmatriculation() : '';
      $chauffeur = $navette->getVehicule() ? $navette->getVehicule()->getChauffeur()->getPrenom() : '';


      foreach ($entries as $entry) {

        $heure_passage = $entry->getHeurePassage() ? $entry->getHeurePassage()->format('H:i') : '';
        $pickup = $entry->getPickupLocation();
        $dropoff = $entry->getDropoffLocation();

        $em->getRepository(MailHistory::class)->log([
          'template' => 'navette-validee',
          'receiver' => $entry->getUser()->getEmail(),
          'subject' => 'STJG - Validation de la navette du {date}',
          'variables' => ['trajet' => $trajet, 'date' => $date, 'heure' => $heure, 'heure_passage' => $heure_passage, 'pickup' => $pickup, 'dropoff' => $dropoff, 'matricule' => $matricule, 'chauffeur' => $chauffeur]
        ]);
      }
    }


        $em->getRepository(Log::class)->store(
        $current_user->getId(),
        $navette->getId(),
        'navette',
        'enable'
        );

        }

      $this->addFlash( 'success', "La navette a été activée avec succès");

    }

    return $this->redirectToRoute('navettes');
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/navettes/{id}/order", name="navettes.order")
   * @IsGranted("ROLE_MANAGER")
   */
  public function order(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);
    $current_user = $user;
    $navettes = $this->getDoctrine()->getRepository(Navette::class)->findBy(['id' => $items]);
    $em = $this->getDoctrine()->getManager();
     

    foreach ($navettes as $navette) {
         
      
      $navette_id = $navette->getId();
      $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy(['navette_id'=>$navette_id]); 

      if ( $navette->getStatus() == 'pré commande' ){
        
         
        $navette->setStatus('commandée');
        $em->persist($navette);
        $em->flush();


        $em->getRepository(Log::class)->store(
        $current_user->getId(),
        $navette->getId(),
        'navette',
        'commandée'
        );

        }

      $this->addFlash( 'success', "La navette a été commandée avec succès");

    }

    return $this->redirectToRoute('navettes');
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/navettes/{id}/comment")
   * @IsGranted("ROLE_MANAGER")
   */
  public function comment(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id', 0);
    $navette = $this->getDoctrine()->getRepository(Navette::class)->find($id);


    $form = $this->createForm(NavetteType::class, $navette, [
      'user' => $user,
      'action' => "/admin/navettes/{$id}/store"
    ])->handleRequest($request);

    if ($request->isMethod('post')) {
      $em = $this->getDoctrine()->getManager();
      $entity = $form->getData();

      $em->persist($entity);
      $em->flush();
      // log activity
      $em->getRepository(Log::class)->store($user->getId(), $navette->getId(), 'navette', 'comment');

      return $this->json([
        'tableId' => 'navettes',
        'status' => 'success',
        'message' => $translator->trans("Le commentaire a bien été ajouté")
      ]);
    }
    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'form' => $form->createView(),
        'title' => $translator->trans("Ajouter un commentaire"),
      ])
    ]);
  }

}