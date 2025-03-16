<?php
    
namespace App\Controller\Admin;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Reservation;
use App\Entity\ReservationEntries;
use App\Entity\Trajet;
use App\Entity\Pickup;
use App\Entity\User;
use App\Entity\Navette;
use App\Service\Table;
use App\Form\ReservationEntriesType;
use App\Form\NavetteType;
use App\Form\Search\ReservationEntriesSearchType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class ReservationEntriesController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/reservation_entries", name="reservation_entries")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    $trajet_id = $request->get('trajet_id', 0);
    $create = $request->get('create', 'no');

    $date = $request->get('date', date('Y-m-d'));
    $direction = $request->get('direction', '');
    $heure = $request->get('heure', '');
    

   // echo $date.'::'.$heure.'::'.$trajet_id.r'::'.$direction.'::'.$create; exit;

    //date=2024-12-14&zone%5B__isInitialized__%5D=1&trajet_id=42&direction=Entrée&heure=8

    $this->get('session')->set('trajet_id', $trajet_id);

     
    /* $em = $this->getDoctrine()->getManager();
     $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findAll();
     foreach ($entries as $entry) {
        if ( $entry->getDirection() == 'Entrée' ){
          $entry->setPickupLocation($entry->getPickup() ? $entry->getPickup()->getName() : $entry->getUser()->getAdresse());
          $entry->setDropOffLocation($entry->getUser()->getSite()->getName());
        }
        else{
          $entry->setPickupLocation($entry->getUser()->getSite()->getName());
          $entry->setDropOffLocation($entry->getPickup() ? $entry->getPickup()->getName() : $entry->getUser()->getAdresse());
        }
       
      if ( $entry->getDirection() == 'Entrée' ){
          $pickupLatitude = $entry->getPickup() ? $entry->getPickup()->getLatitude() : $user->getLatitude();
          $pickupLongitude = $entry->getPickup() ? $entry->getPickup()->getLongitude() : $user->getLongitude();
          $dropoffLatitude = $user->getSite() ? $user->getSite()->getLatitude() : '';
          $dropoffLongitude = $user->getSite() ? $user->getSite()->getLongitude() : '';
        }
        else{
          $pickupLatitude = $user->getSite() ? $user->getSite()->getLatitude() : '';
          $pickupLongitude = $user->getSite() ? $user->getSite()->getLongitude() : '';
          $dropoffLatitude = $entry->getPickup() ? $entry->getPickup()->getLatitude() : $user->getLatitude();
          $dropoffLongitude = $entry->getPickup() ? $entry->getPickup()->getLongitude() : $user->getLongitude();
        }


        $entry->setPickupLatitude($pickupLatitude);
        $entry->setPickupLongitude($pickupLongitude);
        $entry->setDropoffLatitude($dropoffLatitude);
        $entry->setdropoffLongitude($dropoffLongitude);
        $entry->setDistance($entry->calculateDistance());
        $em->persist($entry);  
     } 
     $em->flush();*/
     function calculateHaversineDistance($lat1, $lon1, $lat2, $lon2) {
      $earthRadius = 6371; // Radius of the Earth in kilometers
      
      $dLat = deg2rad($lat2 - $lat1);
      $dLon = deg2rad($lon2 - $lon1);
      
      $a = sin($dLat/2) * sin($dLat/2) + 
           cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * 
           sin($dLon/2) * sin($dLon/2);
      
      $c = 2 * atan2(sqrt($a), sqrt(1-$a));
      $distance = $earthRadius * $c;
      
      return $distance;
  }

     if ($create == 'yes') {
      $em = $this->getDoctrine()->getManager();
  
      $reservationEntriesRepo = $this->getDoctrine()->getRepository(ReservationEntries::class);
      $entries = $reservationEntriesRepo->findBy(
          [
              'reservation_date' => new \DateTime($date), 
              'reservation_heure' => $heure, 
              'direction' => $direction, 
              'trajet_id' => empty($trajet_id) ? null : $trajet_id,
              'status' => 'validée',
              'navette_id' => null 
          ]
      );
  
      // If we have entries, we can set reference points and sort them
      if (count($entries) > 0) {
          // Get reference point (common location)
          $referencePoint = [];
          $firstEntry = $entries[0];
          
          if ($direction == 'Entrée') {
              // For "Entrée", reference is the common dropoff
              $referencePoint = [
                  'lat' => $firstEntry->getDropoffLatitude(),
                  'lng' => $firstEntry->getDropoffLongitude()
              ];
          } else {
              // For "Sortie", reference is the common pickup
              $referencePoint = [
                  'lat' => $firstEntry->getPickupLatitude(),
                  'lng' => $firstEntry->getPickupLongitude()
              ];
          }
          
          // Calculate distances for each entry
          foreach ($entries as $entry) {
              $pointToCompare = [];
              if ($direction == 'Entrée') {
                  // Compare pickup point to common dropoff
                  $pointToCompare = [
                      'lat' => $entry->getPickupLatitude(),
                      'lng' => $entry->getPickupLongitude()
                  ];
              } else {
                  // Compare dropoff point to common pickup
                  $pointToCompare = [
                      'lat' => $entry->getDropoffLatitude(),
                      'lng' => $entry->getDropoffLongitude()
                  ];
              }
              
              // Calculate distance
              $entry->calculatedDistance = calculateHaversineDistance(
                  $referencePoint['lat'], 
                  $referencePoint['lng'], 
                  $pointToCompare['lat'], 
                  $pointToCompare['lng']
              );
          }
          
          // Sort entries by calculated distance
          usort($entries, function($a, $b) use ($direction) {
              if ($direction == 'Entrée') {
                  // Descending order for "Entrée" (farthest pickup first)
                  return $b->calculatedDistance - $a->calculatedDistance;
              } else {
                  // Ascending order for "Sortie" (closest dropoff first)
                  return $a->calculatedDistance - $b->calculatedDistance;
              }
          });
      }
  
      // Create new shuttle
      $trajet = $this->getDoctrine()->getRepository(Trajet::class)->find($trajet_id);
      $new_navette = new Navette();
      $new_navette->setStatus('en attente');
      $new_navette->setDirection($direction);
      $new_navette->setHeureNavette($heure);
  
      if ($trajet) {
          $new_navette->setTrajet($trajet);
          $new_navette->setNomTrajet($trajet->getName());
      } else {
          $new_navette->setNomTrajet('Home Pickup'.' '.$direction.' '.$heure);
      }
      
      $new_navette->setVehicule(null);
      $new_navette->setDateNavette(new \DateTime($date));
  
      $em->persist($new_navette);
      $em->flush();
  
      // Function to calculate Haversine distance between two points

      // Assign sorted entries to the shuttle (limited to 20)
      $i = 0;
      foreach ($entries as $entry) {
          if ($i < 20) {
              $entry->setNavette($new_navette);
              
              if ($direction == 'Entrée' && empty($new_navette->getDropoffLatitude())) {
                  // For "Entrée", set pickup from the farthest entry (first in sorted list)
                  // and set dropoff from the common dropoff location
                  $new_navette->setDropoffLatitude($entry->getDropoffLatitude());
                  $new_navette->setDropoffLongitude($entry->getDropoffLongitude());
                  $new_navette->setDropoffLocation($entry->getDropoffLocation());
                  
                  $new_navette->setPickupLatitude($entry->getPickupLatitude());
                  $new_navette->setPickupLongitude($entry->getPickupLongitude());
              } 
              else if ($direction == 'Sortie' && empty($new_navette->getPickupLatitude())) {
                  // For "Sortie", set pickup from the common pickup location
                  // and set dropoff from the closest entry (first in sorted list)
                  $new_navette->setPickupLatitude($entry->getPickupLatitude());
                  $new_navette->setPickupLongitude($entry->getPickupLongitude());
                  $new_navette->setPickupLocation($entry->getPickupLocation());
                  
                  $new_navette->setDropoffLatitude($entry->getDropoffLatitude());
                  $new_navette->setDropoffLongitude($entry->getDropoffLongitude());
              }
              
              $em->persist($entry);
          }
          $i++;
      }
      
      $em->flush();
  
      return $this->redirectToRoute('navettes');
  }

    return $this->render('admin/reservation_entries/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request, $user)->createView()
    ]);
  }




/**
 * @Route(methods={"POST"}, path="/admin/create_navettes", name="create_navettes")
 */
/**
 * @Route(methods={"POST"}, path="/admin/create_navettes", name="create_navettes")
 */
public function createNavettes(Request $request)
{
    try {
        // Debug incoming request
        $rawContent = $request->getContent();
        error_log('Raw request content: ' . $rawContent);

        $data = json_decode($rawContent, true);
        error_log('Decoded data: ' . print_r($data, true));

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('JSON decode error: ' . json_last_error_msg());
        }

        // Validate required fields
        $requiredFields = ['date', 'direction', 'heure', 'routes'];
        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                throw new \Exception("Missing required field: {$field}");
            }
        }

        $date = $data['date'];
        $direction = $data['direction'];
        $heure = $data['heure'];
        $routes = $data['routes'];

        error_log('Processing routes: ' . print_r($routes, true));
        
        $em = $this->getDoctrine()->getManager();
        $response = [];
        
        foreach ($routes as $routeIndex => $route) {
            error_log('Processing route ' . $routeIndex);
            
            // Create new navette for each route
            $new_navette = new Navette();
            $new_navette->setStatus('en attente');
            $new_navette->setDirection($direction);
            $new_navette->setHeureNavette($heure);
            $new_navette->setNomTrajet('Home Pickup ' . $direction . ' ' . $heure . ' Route ' . ($routeIndex + 1));
            $new_navette->setVehicule(null);
            $new_navette->setDateNavette(new \DateTime($date));
            
            // Get entry IDs for this route
            $entryIds = [];
            foreach ($route['route'] as $point) {
                if (isset($point['points']) && is_array($point['points'])) {
                    foreach ($point['points'] as $pointDetail) {
                        if (isset($pointDetail['id'])) {
                            $entryIds[] = $pointDetail['id'];
                        }
                    }
                }
            }
            error_log('Found entry IDs: ' . print_r($entryIds, true));
            
            // Filter out null values
            $entryIds = array_filter($entryIds);
            
            if (empty($entryIds)) {
                error_log('No valid entry IDs found for route ' . $routeIndex);
                continue;
            }
            
            // Fetch all relevant entries
            $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy([
                'id' => $entryIds,
                'status' => 'validée',
                'navette_id' => null
            ]);
            
            error_log('Found entries: ' . count($entries));
            
            if (empty($entries)) {
                error_log('No valid entries found for route ' . $routeIndex);
                continue;
            }
            
            // Set initial pickup/dropoff points based on direction
            $firstEntry = reset($entries);
            if ($direction == 'Entrée') {
                $new_navette->setDropoffLatitude($firstEntry->getDropoffLatitude());
                $new_navette->setDropoffLongitude($firstEntry->getDropoffLongitude());
                $new_navette->setDropoffLocation($firstEntry->getDropoffLocation());
                
                $firstPoint = reset($route['route']);
                $new_navette->setPickupLatitude($firstPoint['optimizedLat']);
                $new_navette->setPickupLongitude($firstPoint['optimizedLon']);
            } else {
                $new_navette->setPickupLatitude($firstEntry->getPickupLatitude());
                $new_navette->setPickupLongitude($firstEntry->getPickupLongitude());
                $new_navette->setPickupLocation($firstEntry->getPickupLocation());
                $lastPoint = end($route['route']);
                $new_navette->setDropoffLatitude($lastPoint['optimizedLat']);
                $new_navette->setDropoffLongitude($lastPoint['optimizedLon']);
            }
            
            error_log('Persisting navette');
            $em->persist($new_navette);
            $em->flush();
            
            error_log('Created navette with ID: ' . $new_navette->getId());
            
            // Associate entries with this navette
            foreach ($entries as $entry) {
                $entry->setNavette($new_navette);
                $em->persist($entry);
            }
            
            $response[] = [
                'navette_id' => $new_navette->getId(),
                'entry_count' => count($entries)
            ];
        }
        
        $em->flush();
        error_log('Final response: ' . print_r($response, true));
        
        return new JsonResponse([
            'success' => true,
            'navettes' => $response
        ]);
        
    } catch (\Exception $e) {
        error_log('Error in createNavettes: ' . $e->getMessage());
        error_log('Stack trace: ' . $e->getTraceAsString());
        
        return new JsonResponse([
            'success' => false,
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ], 500);
    }
}




  /**
   * @Route(methods={"GET"}, path="/admin/reservation_entries/table", name="reservation_entries.table")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/reservation_entries/export", name="reservation_entries.export")
   */
  public function export(Request $request, UserInterface $user, TranslatorInterface $translator, Table $table)
  {
    $format = $request->get('format', 'xlsx');
    $query = $this->getTable($request, $user, $table, true);
    $filename = $translator->trans("Liste des pointages %date%", ['date' => date('d-m-Y Hi')]);

    return $table->export($query, $filename, $format);
  }


  /**
   * @Route(methods={"GET"}, path="/admin/reservation_entries/{id}/details", name="reservation_entries.details")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $reservationEntriesRepo = $this->getDoctrine()->getRepository(ReservationEntries::class);
    $entry = $reservationEntriesRepo->find($id);
    
    /*if (!$entry or $entry->getReservation()->getUser()->getId() != $user->getId() ) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("ReservationEntries not found")
      ])
    ]);*/
    
    return $this->render('admin/reservation_entries/details.html.twig', [
      'reservation' => $entry,
      'user' => $user
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/reservation_entries/{id}/update", name="reservation_entries.update")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    //if ( date('D') = 'Fri' && date('H') > '12'){ }
    $entry = $this->getDoctrine()->getRepository(ReservationEntries::class)->find($id);
 
    if (!$entry) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Réservation not found"),
      ])
    ]);

    if (!$entry->editable()) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Réservation non modifiable"),
      ])
    ]);

    $form = $this->getForm($request, $user);
    $entity = $form->getData();


    return $this->render('admin/reservation_entries/form.html.twig', [
      'entity' => $entity,
      'form' => $form->createView(),
    ]);
  }

   /**
   * @Route(methods={"POST"}, path="/admin/reservation_entries/{id}/store", name="reservation_entries.store", defaults={"id"=0})
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


    // Debugging: Check the values of Trajet and Pickup
    error_log("as".$entity->getTrajet()); // Should return a Trajet object
    error_log("sd".$entity->getPickup()); // Should return a Pickup object

    if ( $entity->getReservationHeure() < 8 or $entity->getReservationHeure() > 22 ){
      $entity->setTrajet(null);
      $entity->setPickup(null);
    }

    if ( $entity->getDirection() == 'Entrée'){
      $pickupLatitude = $entity->getPickup() ? $entity->getPickup()->getLatitude() : $user->getLatitude();
      $pickupLongitude = $entity->getPickup() ? $entity->getPickup()->getLongitude() : $user->getLongitude();
      $entity->setPickupLatitude($pickupLatitude);
      $entity->setPickupLongitude($pickupLongitude);
    }
    else{
      $dropoffLatitude = $entity->getPickup() ? $entity->getPickup()->getLatitude() : $user->getLatitude();
      $dropoffLongitude = $entity->getPickup() ? $entity->getPickup()->getLongitude() : $user->getLongitude();
      $entity->setDropoffLatitude($dropoffLatitude);
      $entity->setDropoffLongitude($dropoffLongitude);
    }

    //add or update entries
    $distance =  $entity->calculateDistance(); 
    $entity->setDistance($distance);



    //setPickupLatitude
    //setPickupLongitude

    //setDropoffLatitude
    //setDropoffLongitude

    $em = $this->getDoctrine()->getManager();
    if (!$em->contains($entity)) {
        $entity = $em->merge($entity); // Reattach the entity
    }


    $em->persist($entity);
    
    $em->getClassMetadata(get_class($entity))->reflFields['trajet']->setValue($entity, $entity->getTrajet());
    $em->getClassMetadata(get_class($entity))->reflFields['pickup']->setValue($entity, $entity->getPickup());
    $em->getClassMetadata(get_class($entity))->reflFields['pickupLocation']->setValue($entity, $entity->getPickup()->getName());
    try {
      $em->flush();
  } catch (\Exception $e) {
      // Log the error
      error_log('Error during flush: ' . $e->getMessage());
      return $this->json([
          'status' => 'error',
          'message' => 'An error occurred while saving the reservation.'
      ]);
  }

    // log activity
    $em->getRepository(Log::class)->store(
      $user_id,
      $entity->getId(),
      "reservation_entries",
      $isNew ? 'create' : 'update'
    );

    if ( $entity->getNavette() && $user->isAdmin() ){
      echo 'here i am';
      return $this->redirectToRoute('navettes.details', ['id' => $entity->getNavette()->getId() ]);
    }

    return $this->json([
      'tableId' => 'reservation_entries',
      'status' => 'success',
      'message' => $translator->trans("La réservation a été modifié avec succes")
    ]);
  }




  /**
   * @Route(methods={"GET"}, path="/admin/reservation_entries/{id}/validate", name="reservation_entries.validate")
   */
  public function validate(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id', 0);    
    $em = $this->getDoctrine()->getManager();
    $entry = $this->getDoctrine()->getRepository(ReservationEntries::class)->find($id);

    if ( $entry->canValidate($user) ){

        //set GPS cordinates
        if ( $entry->getDirection() == 'Entrée' ){
          $pickupLatitude = $entry->getPickup() ? $entry->getPickup()->getLatitude() : $user->getLatitude();
          $pickupLongitude = $entry->getPickup() ? $entry->getPickup()->getLongitude() : $user->getLongitude();
          $dropoffLatitude = $user->getSite() ? $user->getSite()->getLatitude() : '';
          $dropoffLongitude = $user->getSite() ? $user->getSite()->getLongitude() : '';
        }
        else{
          $pickupLatitude = $user->getSite() ? $user->getSite()->getLatitude() : '';
          $pickupLongitude = $user->getSite() ? $user->getSite()->getLongitude() : '';
          $dropoffLatitude = $entry->getPickup() ? $entry->getPickup()->getLatitude() : $user->getLatitude();
          $dropoffLongitude = $entry->getPickup() ? $entry->getPickup()->getLongitude() : $user->getLongitude();
        }


        $entry->setPickupLatitude($pickupLatitude);
        $entry->setPickupLongitude($pickupLongitude);
        $entry->setDropoffLatitude($dropoffLatitude);
        $entry->setdropoffLongitude($dropoffLongitude);
        $entry->setStatus('validée');
        $entry->setDistance($entry->calculateDistance());

        $em->persist($entry);
        $em->flush();

        $em->getRepository(Log::class)->store(
        $user->getId(),
        $entry->getId(),
        'reservation_entries',
        'enable'
        );

      $this->addFlash( 'success', "Votre réservation a été validé avec succès");
    }

      return $this->redirectToRoute('reservation_entries');
  }


  /**
   * @Route(methods={"GET", "POST"}, path="/admin/reservation_entries/{id}/navette", name="reservation_entries.navette", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function navette(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $em = $this->getDoctrine()->getManager();
    $id = $request->get('id', 0);
    $items = $request->get('items', [$id]);
    $navette = new Navette();
    //set items;

    $form = $this->createForm(NavetteType::class, $navette, [
      'user' => $user,
      'action' => "/admin/reservation_entries/{$id}/navette"
    ])->handleRequest($request);

    if ($request->isMethod('post') ) {

      $em = $this->getDoctrine()->getManager();

      $entries = $em->getRepository(ReservationEntries::class)->createQueryBuilder('re')
      ->where('re.id IN(:items)')
      ->setParameter('items', $items)
      ->orderBy('re.reservation_date', 'ASC')
      ->getQuery()
      ->getResult();

      $navette = '';

      foreach($entries as $entry) {
        //create navette
        if ( empty($navette) ){
          $navette = new Navette();
          $navette->setStatus('en attente');
          $navette->setTrajet($entry->getTrajet());
          $navette->setDateNavette($entry->getReservationDate());
          $navette->setSociete($entry->getUser()->getSociete());
          $navette->setZone($entry->getZone());
          $navette->setDirection($entry->getDirection());
          $navette->setHeureNavette((int)$entry->getReservationHeure());
          $em->persist($navette);
          $em->flush();

          $em->getRepository(Log::class)->store($user->getId(), $navette->getId(), 'navette', 'new');
        }

        //link it to entry
        $entry->setNavette($navette);
        $em->persist($entry);
        $em->flush();

        $em->getRepository(Log::class)->store($user->getId(), $entry->getId(), 'reservation_entries', 'navette');

      }
      
      //redirect to created navette
      $this->addFlash('success', 'Navette créé et réservations affectés.');

      return $this->redirectToRoute('navettes.details', ['id' => $navette->getId() ]);

    }

    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'form' => $form->createView(),
        'title' => $translator->trans("Ajouter une navette"),
      ])
    ]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/reservation_entries/recap", name="reservation_entries.recap")
   */
  public function recap(Request $request, UserInterface $user, Table $table)
  {
    //'status' => 'Pending'

    $trajet_id = $request->get('trajet_id', '');
    $date = $request->get('date', '');
    $direction = $request->get('direction', '');
    $heure = $request->get('heure', '');
    $status = $request->get('status', 'validée');

    //$params = ['status' => 'validée'];



    if ( !empty($status)) {
     $params['status'] = $status;
    }    else{
      $params = ['status' => 'validée'];
    }

    if ( !empty($direction)) {
      $params['direction'] = $direction;
     }
     
    if ( !empty($heure)) {
     $params['reservation_heure'] = $heure;
    }

    if ( !empty($trajet_id)) {
     $params['trajet_id'] = $trajet_id;
    }

    if ( !empty($date)) {
     $date = new \DateTime($date);
     $params['reservation_date'] = $date;
    }

    $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy($params, 
      ['direction' => 'ASC', 'trajet_id' => 'ASC', 'reservation_date' => 'ASC', 'reservation_heure' => 'ASC', 'distance' => 'ASC']);
    $items = [];

    foreach ($entries as $entry) {
      //entree
        $date = $entry->getReservationDate() ? $entry->getReservationDate()->format('Y-m-d') : '';
        $pickup = $entry->getPickup();
        $trajet = $entry->getTrajet();
        $direction = $entry->getDirection();
        $heure = $entry->getReservationHeure();
        $navette = $entry->getNavette();
        $navette_id = $entry->getNavette() ? $entry->getNavette()->getId() : 0 ;
       
        $trajet_id = $entry->getTrajet() ? $entry->getTrajet()->getId() : '';
        $key = $date.$heure.$direction.$trajet_id;
        
        if ( !array_key_exists($key, $items) ){
          $items[$key] = [$date, $trajet,$pickup, $direction, $heure, $trajet_id, 0, '<div></div>', 0, '<div></div>', 0, '<div></div>', $navette_id];
        }

        if ( $navette == null ){
          $items[$key][8] += 1;
          $items[$key][9] .= '<div>- '.str_replace('"', "'", $pickup).'</div>'; 
          $items[$key][13][] = [
            'id' => $entry->getId(), // Entry ID
            'pickupLatitude' => $entry->getPickupLatitude(), // Pickup latitude
            'pickupLongitude' => $entry->getPickupLongitude(), // Pickup longitude
            'pickupLocation' => $entry->getPickupLocation(), // Pickup location
            'dropoffLatitude' => $entry->getDropoffLatitude(), // Pickup latitude
            'dropoffLongitude' => $entry->getDropoffLongitude(), // Pickup longitude
            'dropoffLocation' => $entry->getDropoffLocation() // Pickup location
        ];
        }
        else{
          $items[$key][10] += 1;
          $items[$key][11] .= '<div>- '.str_replace('"', "'", $pickup).'</div>';
        }
         
        $items[$key][6] += 1;
        $items[$key][7] .= '<div>- '.str_replace('"', "'", $pickup).'</div>';    

    }

    foreach ($items as $item) {
      if ( $item[7] == null )  $item[7] = '<div></div>';
      if ( $item[9] == null )  $item[9] = '<div></div>';
      if ( $item[11] == null ) $item[11] = '<div></div>';

    }


    return $this->render('admin/reservation_entries/recap.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'reservations' => $items,
      'search_form' => $this->getSearchForm($request, $user)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/reservation_entries/{id}/annuler", name="reservation_entries.annuler", defaults={"id"=0})
   */
  public function annuler(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $reservation = $this->getDoctrine()->getRepository(ReservationEntries::class)->findById($user, $id);

    if ( $reservation->canValidate($user) ) {
      $reservation->setStatus('annulée');
      $em = $this->getDoctrine()->getManager();
      $em->persist($reservation);
      $em->flush();    

      return $this->json([
        'tableId' => 'reservation_entries',
        'status'  => 'success',
        'message' => $translator->trans("La reservation a bien été annulée")
      ]);
    }
    else{
       return $this->json([
        'status' => 'error',
        'message' => 'Vous ne pouvez pas annuler cette réservation'
      ]);
    }
    
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/reservation_entries/{id}/delete", name="reservation_entries.delete", defaults={"id"=0})
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $reservation = $this->getDoctrine()->getRepository(ReservationEntries::class)->findById($user, $id);

    $em = $this->getDoctrine()->getManager();
    $em->remove($reservation);
    $em->flush();    

    return $this->json([
      'tableId' => 'reservation_entries',
      'status'  => 'success',
      'message' => $translator->trans("La reservation a bien été supprimée")
    ]);
  }

  private function getTable($request, $user, $table, $asQuery = false)
  {
    $table->addColumn('increment', '#');
    if ( $user->getRoleName() != 'user'){
      $table->addColumn('user', 'Nom', [
      'sortable' => true,
      'render' => function ($entity) {
          $id = $entity->getId();
          return "<a href='/admin/reservation_entries/{$id}/details' class='pointer'>{$entity->getUser()}</a>";
      }
    ]);
    }
     


   // $table->addColumn('user', 'Nom', ['sortable' => true]);
    //$table->addColumn('trajet', 'Trajet', ['sortable' => true]);

    $table->addColumn('trajet', 'Trajet', [
      'sortable' => true,
      'render' => function ($entity) {
          $id = $entity->getId();
          return "<a href='/admin/reservation_entries/{$id}/details' class='pointer'>{$entity->getTrajet()}</a>";
      }
    ]);

   // $table->addColumn('pickup', 'Point de ramassage', ['sortable' => true]);

    $table->addColumn('pickup_latitude', 'Pick-up', [
      'sortable' => true,
      'render' => function ($entity) {
          $id = $entity->getId();
          return "<a href='/admin/reservation_entries/{$id}/details' class='pointer'>{$entity->getPickupLocation()}</a>";
      }
    ]);

    $table->addColumn('dropoff_latitude', 'Drop-off', [
      'sortable' => true,
      'render' => function ($entity) {
          $id = $entity->getId();
          return "<a href='/admin/reservation_entries/{$id}/details' class='pointer'>{$entity->getDropoffLocation()}</a>";
      }
    ]);

     $table->addColumn('direction', 'Direction', [
      'sortable' => true,
      'render' => function ($entity) {
          $id = $entity->getId();
          return "<a href='/admin/reservation_entries/{$id}/details' class='pointer'>{$entity->getDirection()}</a>";
      }
    ]);


    $table->addColumn('reservation_date', 'Date', [
      'sortable' => true,
      'render' => function($entity) {
        return empty($entity->getReservationDate()) ? '' : $entity->getReservationDate()->format('d-m-Y');
      }
    ]);
    $table->addColumn('reservation_heure', 'Heure', ['sortable' => true]);
    //$table->addColumn('checkin_at', 'Checkin', ['sortable' => true]);

    $table->addColumn('status', 'État', [
      'sortable' => true,
      'render' => function($entity) {
        switch(strtolower($entity->getStatus())) {
          case 'checked':
            $class = 'success';
            break;
          case 'annulée':
            $class = 'danger';
            break;
          case 'absent':
            $class = 'primary';
            break;
          case 'validée':
            $class = 'success';
            break;
          case 'en attente':
            $class = 'warning';
            break;
          case 'wrong shift':
            $class = 'warning';
            break;
          default:
            $class = 'primary';
            break;
        }
        $label = $entity->getStatus();
        return "<span class='badge bg-{$class}'>{$label}</span>";
      }
    ]);
    
    $table->setPrimaryKey('id');
    $table->setOrder('re.reservation_date', 'DESC');
    /*$table->addAction('checkin', [
      'label' => 'Checkin',
      'icon'  => 'bi bi-calendar-check',
      'route' => '/admin/reservation_entries/[id]/checkin'
    ]);*/
    
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/reservation_entries/[id]',
      'display' => function ($entity) use ($user) {
        return $this->isGranted('ROLE_ADMIN') or $entity->getUser() == $user ;
      }
    ]);
     $table->addAction('edit', [
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/reservation_entries/[id]/update',
      'display' => function ($entity) use ($user) {
        return $entity->canModify($user);
      }
    ]);

     $table->addAction('details', [
      //'type'  => 'modal',
      'label' => 'Détails',
      'icon'  => 'bi bi-list-stars',
      'route' => '/admin/reservation_entries/[id]/details'
    ]);

    /*$table->addAction('validate', [
      'icon'  => 'bi bi-toggle-on',
      'route' => '/admin/reservation_entries/[id]/validate',
      'label' => 'Valider',
      'display' => function($entity) use ($user) {
        return $entity->canValidate($user);
      }
    ]);*/

    $table->addAction('annuler', [
      'type'  => 'modal',
      'icon'  => 'bi bi-trash',
      'route' => '/admin/reservation_entries/[id]/annuler',
      'label' => 'Annuler',
      'display' => function($entity) use ($user) {
        return $entity->canModify($user);
      }
    ]);

    $table->addAction('navette', [
      'type'  => 'modal',
      'icon'  => 'bi bi-plus',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/reservation_entries/{$id}/navette";
      },
      'label' => 'Navette',
      'display' => function($entity) {
        return $this->isGranted('ROLE_ADMIN') && $entity->getStatus() == 'active';
      },
      'bulk_action' => $this->isGranted('ROLE_ADMIN') ? true : false
    ]);

    //$table->addDivider();
    //check if owner and reservation has 0 links


    

    $query = $this->getTableQuery($request, $user);

    if ($asQuery) {
      return $query;
    }
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $status = $direction = $trajet_id = $du = $au = '';
    $reservation_entriesRepo = $this->getDoctrine()->getRepository(ReservationEntries::class);
    $query = $reservation_entriesRepo->createQueryBuilder('re');
    //$query->join(Trajet::class, 't', 'WITH', 't.id = re.trajet_id');
    $query->join(Reservation::class, 'r', 'WITH', 'r.id = re.reservation_id');
    //$query->join(Pickup::class, 'p', 'WITH', 'p.id = re.pickup_id');

    $status = $request->get('status');
    $direction = $request->get('direction');
    $trajet_id = $request->get('trajet_id');
    $date = $request->get('date');
    $heure = $request->get('heure');
    $pickup_id = $request->get('pickup_id');

    if ( in_array('ROLE_CHAUFFEUR', $user->getRoles(), true) ) {
      $params['employe'] = $user->getId();
      $query->andWhere('t.user_id = :employe');
    }
    else if ( in_array('ROLE_USER', $user->getRoles(), true) ) {
      $params['user_id'] = $user->getId();
      $query->andWhere('r.user_id = :user_id');
    }


   /* ->join(Trajet::class, 't', 'WITH', 't.id = p.trajet_id')
          ->andWhere('t.direction = :direction')
          ->setParameter('direction', 'Entrée')*/

    // search params
    /*$keywords = $request->get('q');
    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['re.name']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }*/

    if ( !empty($direction)) {

     $params['direction'] = $direction;
      $query->andWhere('re.direction = :direction');
    }
    if ( !empty($heure)) {
     $params['heure'] = $heure;
      $query->andWhere('re.reservation_heure = :heure');
    }
    if ( !empty($status)) {
     $params['status'] = $status;
      $query->andWhere('re.status = :status');
    }

    if ( !empty($trajet_id)) {
     $params['trajet_id'] = $trajet_id;
      $query->andWhere('re.trajet_id = :trajet_id');
    }

    if ( !empty($date)) {
     $params['date'] = $date;
      $query->andWhere('re.reservation_date = :date');
    }
    if ( !empty($pickup_id)) {
      $params['pickup_id'] = (int)$pickup_id;
       $query->andWhere('re.pickup_id = :pickup_id');
     }
    $query->setParameters($params);

    return $query;

    
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(ReservationEntries::class)->find($id);
      dump($entity);
    } else {
      $entity = new ReservationEntries();
    }
    $form = $this->createForm(ReservationEntriesType::class, $entity, [
      'user' => $user,
      'action' => $this->generateUrl('reservation_entries.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request, $user)
  {

    return $this->createForm(ReservationEntriesSearchType::class, null, [
      'method' => 'GET',
      'csrf_protection' => false,
      'user' => $user,
      'trajet_id' => $request->get('trajet_id'),
      'pickup_id' => $request->get('pickup_id'),
      'request' => $request,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/reservation_entries/{token}/checkin", name="reservation_entries.checkin")
   * @IsGranted("ROLE_CHAUFFEUR")
   */
  public function checkin(Request $request): Response
  {
    $em = $this->getDoctrine()->getManager();
    //TODO read the qr code
    $token = $request->get('token');
    
    //find user
    $passenger = $entry = $this->getDoctrine()->getRepository(User::class)->findByToken($token);
    if ( !$passenger ){
      $this->addFlash( 'danger', "QrCode invalide !");
      return $this->redirectToRoute('reservation_entries');
    }
    else { 
    //get chauffeur current trajet

      //select by user_id and trajet_id and date_reservation

      $trajet_id = $this->get('session')->get('trajet_id');
      $user_id = $passenger->getId();
      $date = new \DateTime();

      $entry = $this->getDoctrine()->getRepository(ReservationEntries::class)->findEntry($user_id, $trajet_id, $date);

    //if not exists create and save checkin
    if ( $entry ){
      $entry->setStatus('Checked');
      $entry->setCheckinAt(new \DateTime());
      $em->persist($entry);
      $entityManager->flush();
      echo 'step 1';exit;
    } 
    else{

      $entry = $this->getDoctrine()->getRepository(ReservationEntries::class)->findEntry(0, $trajet_id, $date);
      //clone reservation
      if ( $entry ){
        $reservation = $entry->getReservation();
        $new_reservation = clone $reservation;
        $new_reservation->setUser($passenger);
        $em->persist($new_reservation);

        $new_entry = clone $entry;
        $new_entry->setReservation($new_reservation);
        $new_entry->setUser($passenger);
        $new_entry->setStatus('Wrong shift');
        $new_entry->setCheckinAt(new \DateTime());
        $em->persist($new_entry);

        $em->flush();
        echo 'step 2';exit;
      }

    }            
   
    
    
    

    $this->addFlash('success', 'Utilisateur enregistré avec succès.');

    }
      
    return $this->redirectToRoute('reservation_entries');

    }


}
