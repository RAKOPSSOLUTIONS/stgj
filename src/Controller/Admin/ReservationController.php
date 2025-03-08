<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Reservation;
use App\Entity\ReservationEntries;
use App\Entity\Shift;
use App\Entity\Pickup;
use App\Entity\Trajet;
use App\Entity\User;
use App\Service\Table;
use App\Form\ReservationType;
use App\Form\Search\ReservationSearchType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class ReservationController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/reservations", name="reservations")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    if ( $user->getRoleName() == 'user' && (empty($user->getLongitude()) or empty($user->getLatitude()) or empty($user->getEmail()) or empty($user->getTelephone()) ) ){

      $this->addFlash( 'error', "Veuillez compléter vos informations");

      return $this->redirectToRoute('user.update', ['id' => $user->getId()]);
    }
    return $this->render('admin/reservation/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request, $user)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/reservations/recap", name="reservations.recap")
   */
  public function recap(Request $request, UserInterface $user, Table $table)
  {
    $today = new \DateTime();
    $today->modify('-30 days');
    //'reservation_date' => $today
    $reservations = $this->getDoctrine()->getRepository(Reservation::class)->findBy(['status' => 'validated'], ['reservation_date' => 'DESC']);
    $items = [];

    foreach ($reservations as $reservation) {
      //entree
      if ( !empty($reservation->getShiftEntree()) && !empty($reservation->getTrajetEntree()) ){
        $date = $reservation->getReservationDate() ? '' : $reservation->getReservationDate()->format('j-m-Y');
        $zone = $reservation->getZone();
        $trajet = $reservation->getTrajetEntree();
        $direction = 'Entrée';
        $heure = $reservation->getShiftEntree();
        $dates = $reservation->getDatesEntree();
        $count_entree = count($dates);

        foreach ($dates as $date) {
          $key = $date.$zone.$trajet.$direction.$heure;
          if ( !in_array($key, $items)){
            $items[$key] = [$date, $zone, $trajet, $direction, $heure, $count_entree];
          }
          else{
            $items[$key][5] += 1;
          }
        }
      }
      //sortie
      if ( !empty($reservation->getShiftSortie()) && !empty($reservation->getTrajetSortie()) ){
        $date = $reservation->getReservationDate() ? '' : $reservation->getReservationDate()->format('j-m-Y');
        $zone = $reservation->getZone();
        $trajet = $reservation->getTrajetSortie();
        $direction = 'Sortie';
        $heure = $reservation->getShiftSortie();
        $dates = $reservation->getDatesSortie();
        $count_sortie = count($dates);

        foreach ($dates as $date) {
          $key = $date.$zone.$trajet.$direction.$heure;
          if ( !in_array($key, $items)){
            $items[$key] = [$date, $zone, $trajet, $direction, $heure, $count_sortie];
          }
          else{
            $items[$key][5] += 1;
          }
        }
      }

      
    }

    return $this->render('admin/reservation/recap.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'reservations' => $items,
      'search_form' => $this->getSearchForm($request, $user)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/reservations/table", name="reservations.table")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/reservations/export", name="reservations.export")
   */
  public function export(Request $request, UserInterface $user, TranslatorInterface $translator, Table $table)
  {
    $format = $request->get('format', 'xlsx');
    $query = $this->getTable($request, $user, $table, true);
    $filename = $translator->trans("Liste des reservations %date%", ['date' => date('d-m-Y Hi')]);

    return $table->export($query, $filename, $format);
  }


  /**
   * @Route(methods={"GET"}, path="/admin/reservations/{id}/details", name="reservations.details")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $reservationRepo = $this->getDoctrine()->getRepository(Reservation::class);
    $reservation = $reservationRepo->findById($user, $id);

    if (!$reservation) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Reservation not found")
      ])
    ]);

    return $this->render('admin/reservation/details.html.twig', [
      'reservation' => $reservation,
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/reservations/create", name="reservations.create")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {  
    if ( empty($user->getTelephone()) or empty($user->getEmail()) or empty($user->getLongitude()) or empty($user->getLatitude())){
       $this->addFlash( 'error', "Veuillez compléter vos informations");
           
       return $this->redirectToRoute('user.location');
    }

    if ($user->getRoleName()=='user' && $user->getSociete() && $user->getSociete()->getAdhesion() == 1 && $user->getAdhesion() != 1 ){
       $this->addFlash( 'error', "Vous devez accepter la charte d'utilisation pour pouvoir réserver des trajets");
           
       return $this->redirectToRoute('user.adhesion');
    }

    $e_pickups = $this->getDoctrine()->getRepository(Pickup::class)->getItemsForSelect($user);
    $s_pickups = $this->getDoctrine()->getRepository(Pickup::class)->getItemsForSelect($user, 'Sortie');
    
    $datesInfo = $this->GetCurrentWeekDates($user);
    $dates = [$datesInfo[0], $datesInfo[1]];
    $disabledDates = $datesInfo[2];
    
    return $this->render('admin/reservation/form.html.twig', [
      'entity' => null,
      'e_pickups' => $e_pickups,
      's_pickups' => $s_pickups,
      'dates' => $dates,
      'disabledDates' => $disabledDates,
      'form' => $this->getForm($request, $user, $e_pickups, $s_pickups, $dates)->createView(),
    ]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/reservations/{id}/update", name="reservations.update")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
   

    //if ( date('D') = 'Fri' && date('H') > '12'){ }
    $reservation = $this->getDoctrine()->getRepository(Reservation::class)->findById($user, $id);

    $e_pickups = $this->getDoctrine()->getRepository(Pickup::class)->getItemsForSelect($user);
    $s_pickups = $this->getDoctrine()->getRepository(Pickup::class)->getItemsForSelect($user, 'Sortie');
    $dates = $this->GetCurrentWeekDates($user); //set params user & reservation

    if (!$reservation) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("reservation not found"),
      ])
    ]);

    if (!$reservation->editable()) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("reservation non modifiable"),
      ])
    ]);

    $form = $this->getForm($request, $user, $e_pickups, $s_pickups, $dates);
    $entity = $form->getData();

    return $this->render('admin/reservation/form.html.twig', [
      'entity' => $entity,
      'e_pickups' => $e_pickups,
      's_pickups' => $s_pickups,
      'dates' => $dates,
      //'e_home_pickup' => $entity->isHomePickUp('Entrée'),
      //'s_home_pickup' => $entity->isHomePickUp('Sortie'),
      'form' => $form->createView(),
    ]);

    
  }


  /**
   * @Route(methods={"POST"}, path="/admin/reservations/{id}/store", name="reservations.store", defaults={"id"=0})
   */
  public function store(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    //Validate form data
    $e_pickups = $this->getDoctrine()->getRepository(Pickup::class)->getItemsForSelect($user);
    $s_pickups = $this->getDoctrine()->getRepository(Pickup::class)->getItemsForSelect($user, 'Sortie');
    
    $dates = $this->GetCurrentWeekDates($user);

    $form = $this->getForm($request, $user, $e_pickups, $s_pickups, $dates);
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
    if ( !$entity->getUser() ) $entity->setUser($user);
    $entity->setSite($user->getSite());

    if ( $entity->getShiftEntree() < 8 ) $entity->setAdresseEntree($user->getAdresse());
    if ( $entity->getShiftSortie() > 20 ) $entity->setAdresseSortie($user->getAdresse());

    if ( $entity->getPickupEntree() ) $entity->setTrajetEntree($entity->getPickupEntree()->getTrajet());
    if ( $entity->getPickupSortie() ) $entity->setTrajetSortie($entity->getPickupSortie()->getTrajet());

    if ( $user->getZone() ) $entity->setZone($user->getZone());

    if ( $isNew ) {
      $entity->setStatus('active');
    }

    //begin_on & end_on
    if ( !empty($dates)){
      $entity->setBeginOn(new \DateTime(reset($dates[0])));
      $entity->setEndOn(new \DateTime(end($dates[0])));
    }
    
    //add or update entries
    $em->persist($entity);
    $em->flush();

    // log activity
    $em->getRepository(Log::class)->store(
      $user_id,
      $entity->getId(),
      "reservation",
      $isNew ? 'create' : 'update'
    );

    //create entries
    $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy(['reservation_id'=>$entity->getId()]); 

    if ( count($entries) == 0 ){
        
        //create entries
        $reservation = $entity;
        $dates_entree = $reservation->getDatesEntree();
        foreach ($dates_entree as $date) {
            $entry = new ReservationEntries();

            $pickup = $reservation->getPickupEntree() ? $reservation->getPickupEntree() : $reservation->getUser()->getPickup();
            $site = $reservation->getUser()->getSite();

            $entry->setReservationDate(new \DateTime($date));
            $entry->setReservationHeure($reservation->getShiftEntree());

            $entry->setStatus('validée');
            $entry->setDirection('Entrée');

            $entry->setReservation($entity);
            $entry->setUser($reservation->getUser());
            $entry->setPickup($pickup);
            $entry->setTrajet($reservation->getTrajetEntree());
            
            $entry->setPickupLatitude($pickup->getLatitude());
            $entry->setPickupLongitude($pickup->getLongitude());

            $entry->setDropoffLatitude($site->getLatitude());
            $entry->setDropoffLongitude($site->getLongitude());

            $entry->setPickupLocation($pickup->getName());
            $entry->setDropOffLocation($site->getName());
         
            $em->persist($entry);
        }
        $dates_sortie = $reservation->getDatesSortie();
        foreach ($dates_sortie as $date) {
            $entry = new ReservationEntries();

            $pickup = $reservation->getPickupSortie() ? $reservation->getPickupSortie() : $reservation->getUser()->getPickup();
            $site = $reservation->getUser()->getSite();

            $entry->setReservationDate(new \DateTime($date));
            $entry->setReservationHeure($reservation->getShiftSortie());

            $entry->setStatus('validée');
            $entry->setDirection('Sortie');

            $entry->setReservation($entity);
            $entry->setUser($reservation->getUser());
            $entry->setPickup($pickup);
            $entry->setTrajet($reservation->getTrajetSortie());
            
            $entry->setPickupLatitude($site->getLatitude() );
            $entry->setPickupLongitude($site->getLongitude());

            $entry->setDropoffLatitude($pickup->getLatitude());
            $entry->setDropoffLongitude($pickup->getLongitude());

            $entry->setPickupLocation($site->getName());
            $entry->setDropOffLocation($pickup->getName());

            $em->persist($entry);
        }

        $em->flush();

    }

    //end

    return $this->json([
      'tableId' => 'reservations',
      'status' => 'success',
      'message' => $translator->trans("Vos demandes de réservations sont enregistrées")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/reservations/{id}/delete", name="reservations.delete", defaults={"id"=0})
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $reservation = $this->getDoctrine()->getRepository(Reservation::class)->findById($user, $id);

    if ( $reservation->getStatus() == '--Active' ){
      return $this->json([
      'tableId' => 'reservations',
      'status'  => 'error',
      'message' => $translator->trans("vous ne pouvez pas supprimer cette réservation")
    ]);
    }

    $em = $this->getDoctrine()->getManager();
    $em->remove($reservation);
    foreach ($reservation->getEntries() as $entry) {
      $em->remove($entry);
    }
    $em->flush();    

    return $this->json([
      'tableId' => 'reservations',
      'status'  => 'success',
      'message' => $translator->trans("La reservation a bien été supprimée")
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/reservations/{id}/annuler", name="reservations.annuler", defaults={"id"=0})
   */
  public function annuler(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $reservation = $this->getDoctrine()->getRepository(Reservation::class)->findById($user, $id);

    if ( $reservation->getStatus() == 'annulée' ){

      $this->addFlash( 'error', "La pré-réservation est déjà annulée");

      return $this->redirectToRoute('reservations');
      
    }

    $em = $this->getDoctrine()->getManager();
    $reservation->setStatus('annulée');
    $em->persist($reservation);
    foreach ($reservation->getEntries() as $entry) {
      $entry->setStatus('annulée');
      $em->persist($entry);
    }
    $em->flush();    

    $this->addFlash( 'success', "La pré-réservation a été annulée avec succès");

    return $this->redirectToRoute('reservations');
  }

  private function getTable($request, $user, $table, $asQuery = false)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('reservation_date', 'Date', ['sortable' => true]);
    $table->addColumn('zone', 'Zone', ['sortable' => true]);
    
    $table->addColumn('user', 'Employé', ['sortable' => true]);
    if ($asQuery) {
      $table->addColumn('trajet_entree', 'Trajet d\'entrée', ['sortable' => true]);
      $table->addColumn('pickup_entree', 'Point de ramassage Entrée', ['sortable' => true]);
      $table->addColumn('shift_entree', 'Heure d\'entrée', ['sortable' => true]);
      $table->addColumn('adresse_entree', 'Adresse d\'entree', ['sortable' => true]);
      $table->addColumn('repere_entree', 'Repère d\'entrée', ['sortable' => true]);
      $table->addColumn('dates_entree', 'Dates d\'entrée', ['sortable' => true,
        'render' => function ($entity) {
          $dates = implode(",", $entity->getDatesEntree());

          return $dates;
      }
      ]);
      $table->addColumn('trajet_sortie', 'Trajet  de sortie', ['sortable' => true]);
      $table->addColumn('pickup_sortie', 'Point de ramassage de sortie', ['sortable' => true]);
      $table->addColumn('shift_sortie', 'Heure de sortie', ['sortable' => true]);
      $table->addColumn('dates_sortie', 'Dates de sortie', ['sortable' => true,
        'render' => function ($entity) {
          $dates = implode(",", $entity->getDatesSortie());

          return $dates;
      }
      ]);
    }
    else{
      $table->addColumn('trajet_entree', 'Trajet', [
      'sortable' => true,
      'render' => function ($entity) {
          $id = $entity->getId();
          $trajet = '<i class="bi bi-arrow-right-short"></i> '.$entity->getTrajetEntree() . '<br /><i class="bi bi-arrow-left-short"></i> '. $entity->getTrajetSortie();

          return "<a href='/admin/reservations/{$id}/details' class='pointer'>{$trajet}</a>";
      }
    ]);
    $table->addColumn('pickup_entree', 'Point de rammassage', [
      'sortable' => true,
      'render' => function ($entity) {
          $id = $entity->getId();

          return '<i class="bi bi-arrow-left-short"></i> '.$entity->getPickupEntree() . '<br /><i class="bi bi-arrow-left-short"></i> ' . $entity->getPickupSortie();
      }
    ]);
    $table->addColumn('adresse_entree', 'Adresse', [
      'sortable' => true,
      'render' => function ($entity) {
          $id = $entity->getId();
          $trajet = '<i class="bi bi-arrow-right-short"></i> '.$entity->getAdresseEntree() . '<br /><i class="bi bi-arrow-left-short"></i> '. $entity->getAdresseSortie();

          return "<a href='/admin/reservations/{$id}/details' class='pointer'>{$trajet}</a>";
      }
    ]);
    $table->addColumn('shift_entree', 'Heure', [
      'sortable' => true,
      'render' => function ($entity) {
          $id = $entity->getId();

          return '<i class="bi bi-arrow-right-short"></i> '.$entity->getShiftEntree() . '<br /><i class="bi bi-arrow-left-short"></i> ' . $entity->getShiftSortie();
      }
    ]);

    /*$table->addColumn('status', 'État', [
      'sortable' => true,
      'render' => function($entity) {
        switch(strtolower($entity->getStatus())) {
          case 'active':
            $class = 'success';
            break;
          case 'annulée':
            $class = 'danger';
            break;
          case 'inactive':
            $class = 'warning';
            break;
          default:
            $class = 'danger';
            break;
        }
        $label = $entity->getStatus();
        return "<span class='badge bg-{$class}'>{$label}</span>";
      }
    ]);*/

    }
    

    $table->setPrimaryKey('id');
    $table->setOrder('r.id', 'DESC');
    $table->addAction('details', [
      'label' => 'Détail',
      'icon'  => 'bi bi-list-stars',
      'route' => '/admin/reservations/[id]/details'
    ]);
    /*$table->addAction('edit', [
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/reservations/[id]/update',
      'display' => function ($entity) use ($user) {
        return $entity->getUser()->getId() == $user->getId() && $entity->editable();
      }
    ]);
    $table->addAction('enable', [
      'icon'  => 'bi bi-toggle-on',
      'route' => '/admin/reservations/[id]/enable',
      'label' => 'Valider',
      'display' => function($entity) {
        return $this->isGranted('ROLE_ADMIN') && $entity->getStatus() == 'Inactive';
      },
      'bulk_action' => true
    ]);*/
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/reservations/[id]',
      'display' => function ($entity) use ($user) {
        return $this->isGranted('ROLE_ADMIN');
      }
    ]);

    /*$table->addAction('annuler', [
      'label' => 'Annuler',
      'icon'  => 'bi bi-bootstrap-reboot',
      'route' => '/admin/reservations/[id]/annuler',
      'display' => function ($entity) use ($user) {
        return $entity->getUser()->getId() == $user->getId() && $entity->editable();
      }
    ]);*/

    //$table->addDivider();
    //check if owner and reservation has 0 links
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-x-lg',
      'confirm' => true,
      'route' => '/admin/reservations/[id]/delete',
      'display' => function ($entity) use ($user) {
        return $this->isGranted('ROLE_ADMIN');
      }
    ]);

    $query = $this->getTableQuery($request, $user);

    if ($asQuery) {
      return $query;
    }
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $reservationsRepo = $this->getDoctrine()->getRepository(Reservation::class);
    $query = $reservationsRepo->createQueryBuilder('r');
    $query->join(User::class, 'u', 'WITH', 'u.id = r.user_id');

     
    if ( $user->getRoleName() == 'user' ) {
      $params['user_id'] = $user->getId();
      $query->andWhere('r.user_id = :user_id');
    }
    else if ( $user->getRoleName() == 'manager' ) {
      $params['societe_id'] = $user->getSociete()->getId();
      $query->andWhere('u.societe_id = :societe_id');
    }
    // search params
    $status = $request->get('status');
    $zone = $request->get('zone');
    $societe_id = $request->get('societe_id');
    $date = $request->get('date');

    //$keywords = $request->get('q');

    /*if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['c.name']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }*/

    if ( !empty($status)) {
     $params['status'] = $status;
      $query->andWhere('r.status = :status');
    }

    if ( !empty($zone)) {
      $params['zone'] = $zone;
      $query->andWhere('r.zone = :zone');
    }

    if ( !empty($societe_id)) {
      $params['societe_id'] = $societe_id;
      $query->andWhere('u.societe_id = :societe_id');
    }

    if ( !empty($date)) {
      $params['date'] = $date;
      $query->andWhere('r.reservation_date = :date');
    }

    $query->setParameters($params);

    return $query;
  }

  private function getForm($request, $user, $e_pickups, $s_pickups, $dates)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Reservation::class)->find($id);
    } else {
      $entity = new Reservation();
    }
    $form = $this->createForm(ReservationType::class, $entity, [
      'user' => $user,
      'e_pickups' => $e_pickups,
      's_pickups' => $s_pickups,
      'dates' => $dates,
      'action' => $this->generateUrl('reservations.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request, $user)
  {
    return $this->createForm(ReservationSearchType::class, null, [
      'method' => 'GET',
      'csrf_protection' => false,
      'user' => $user,
      'request' => $request,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

  private function GetCurrentWeekDates($user)
  {
      $currentDateTime = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
      $currentHour = (int)$currentDateTime->format('H');
      $currentDay = (int)$currentDateTime->format('N'); // 1 (Monday) to 7 (Sunday)
      
      // Debug current date info
      error_log("Current date: " . $currentDateTime->format('Y-m-d H:i'));
      error_log("Current day: " . $currentDay . " (1=Monday, 7=Sunday)");
      error_log("Current hour: " . $currentHour);
      
      // Check if it's within the restricted period (Friday 13:00 to Tuesday 00:00)
      $isFridayAfternoonToTuesdayMorning = false;
      $dayOfWeek = (int)$currentDateTime->format('N');
      
      if (($dayOfWeek == 5 && $currentHour >= 13) || // Friday after 1 PM
          $dayOfWeek == 6 || // Saturday
          $dayOfWeek == 7 || // Sunday
          $dayOfWeek == 1) { // Monday
          $isFridayAfternoonToTuesdayMorning = true;
      }
      
      error_log("Is Friday afternoon to Tuesday morning: " . ($isFridayAfternoonToTuesdayMorning ? 'Yes' : 'No'));
      
      // Determine the start date for generating the next 7 days
      $startDate = clone $currentDateTime;
      if ($currentHour >= 13) {
          $startDate->modify('+2 days'); // Shift to day after tomorrow if past 1 PM
      } else {
          $startDate->modify('+1 day'); // Shift to tomorrow if before 1 PM
      }
      
      error_log("Start date for next 7 days: " . $startDate->format('Y-m-d'));
      
      $days = 7; // Set to 7 days for a week
      $nextWeekDates = [];
      $disabledDates = [];
      
      // Determine the Friday of the current week to base the disabling logic
      $fridayOfCurrentWeek = clone $currentDateTime;
      if ($currentDay < 5) { // Before Friday
          $fridayOfCurrentWeek->modify('last Friday');
      } elseif ($currentDay > 5) { // After Friday
          $fridayOfCurrentWeek->modify('last Friday');
      } // If it's Friday (day 5), keep the current date
      
      // Define the three days to potentially disable (Saturday, Sunday, Monday) after Friday
      $saturday = clone $fridayOfCurrentWeek;
      $saturday->modify('+1 day');
      $sunday = clone $fridayOfCurrentWeek;
      $sunday->modify('+2 days');
      $monday = clone $fridayOfCurrentWeek;
      $monday->modify('+3 days');
      
      $disableSaturday = $saturday->format('Y-m-d');
      $disableSunday = $sunday->format('Y-m-d');
      $disableMonday = $monday->format('Y-m-d');
      
      error_log("Friday of current week: " . $fridayOfCurrentWeek->format('Y-m-d'));
      error_log("Potential disable Saturday: " . $disableSaturday);
      error_log("Potential disable Sunday: " . $disableSunday);
      error_log("Potential disable Monday: " . $disableMonday);
      
      // Determine which dates to disable based on current day and time
      if ($isFridayAfternoonToTuesdayMorning) {
          if ($currentDay == 5 && $currentHour >= 13) { // Friday after 1 PM
              $disabledDates = [$disableSaturday, $disableSunday, $disableMonday];
          } elseif ($currentDay == 6) { // Saturday
              if ($currentHour < 13) {
                  $disabledDates = [$disableSaturday, $disableSunday, $disableMonday];
              } else {
                  $disabledDates = [$disableSunday, $disableMonday];
              }
          } elseif ($currentDay == 7) { // Sunday
              if ($currentHour < 13) {
                  $disabledDates = [$disableSunday, $disableMonday];
              } else {
                  $disabledDates = [$disableMonday];
              }
          } elseif ($currentDay == 1) { // Monday
              if ($currentHour < 13) {
                  $disabledDates = [$disableMonday];
              } else {
                  $disabledDates = [];
              }
          }
      }
      
      // Generate the next 7 days starting from startDate
      $tempDate = clone $startDate;
      error_log("Generating dates:");
      for ($i = 0; $i < $days; $i++) {
          $dateStr = $tempDate->format('Y-m-d');
          $dayOfWeek = (int)$tempDate->format('N');
          
          $nextWeekDates[$dateStr] = $dateStr;
          
          $shouldDisable = in_array($dateStr, $disabledDates);
          error_log("Date: $dateStr, Day: $dayOfWeek, Should disable: " . ($shouldDisable ? 'Yes' : 'No'));
          
          $tempDate->modify('+1 day');
      }
      
      error_log("Disabled dates: " . implode(", ", $disabledDates));
      
      // Fetch existing reservations
      $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy([
          'user_id' => $user->getId(),
          'reservation_date' => array_keys($nextWeekDates)
      ]);
      
      $dates_entree = $nextWeekDates;
      $dates_sortie = $nextWeekDates;
      
      // Filter out reserved dates
      foreach ($entries as $entry) {
          $date = $entry->getReservationDate()->format('Y-m-d');
          $direction = $entry->getDirection();
          
          if ($direction == 'Entrée') {
              if ($entry->getStatus() != 'annulée' && array_key_exists($date, $dates_entree)) {
                  unset($dates_entree[$date]);
              }
          } else {
              if ($entry->getStatus() != 'annulée' && array_key_exists($date, $dates_sortie)) {
                  unset($dates_sortie[$date]);
              }
          }
      }
      
      return [$dates_entree, $dates_sortie, $disabledDates];
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/reservations/{id}/enable", name="reservations.enable")
   * @IsGranted("ROLE_ADMIN")
   */
  public function enable(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);
    $current_user = $user;
    $reservations = $this->getDoctrine()->getRepository(Reservation::class)->findBy(['id' => $items]);
    $em = $this->getDoctrine()->getManager();
    if (!$reservation) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);

      foreach ($reservations as $reservation) {
         
      
    $reservation_id = $reservation->getId();
    $entries = $this->getDoctrine()->getRepository(ReservationEntries::class)->findBy(
    ['reservation_id'=>$reservation_id]); 

    if ( count($entries) == 0 && $reservation->getStatus() == 'inactive' ){
        
        //create entries
        $dates_entree = $reservation->getDatesEntree();
        foreach ($dates_entree as $date) {
            $entry = new ReservationEntries();
            $entry->setReservation($reservation);
            $entry->setUser($reservation->getUser());
            if ( $reservation->getTrajetEntree() ) $entry->setTrajet($reservation->getTrajetEntree());
            if ( $reservation->getPickupEntree() ) $entry->setPickup($reservation->getPickupEntree());
            $entry->setReservationDate(new \DateTime($date));
            $entry->setStatus('active');
            $entry->setDirection('Entrée');
            $em->persist($entry);
        }
        $dates_sortie = $reservation->getDatesSortie();
        foreach ($dates_sortie as $date) {
            $entry = new ReservationEntries();
            $entry->setReservation($reservation);
            $entry->setUser($reservation->getUser());
            if ( $reservation->getTrajetSortie() ) $entry->setTrajet($reservation->getTrajetSortie());
            if ( $reservation->getPickupSortie() ) $entry->setPickup($reservation->getPickupSortie());
            $entry->setReservationDate(new \DateTime($date));
            $entry->setStatus('active');
            $entry->setDirection('Sortie');
            $em->persist($entry);
        }

        $reservation->setStatus('active');
        $em->persist($reservation);

        $em->flush();


        $em->getRepository(Log::class)->store(
        $current_user->getId(),
        $user->getId(),
        'reservation',
        'enable'
        );

        }

        

      $this->addFlash( 'success', "La réservation a été activé avec succès");

    }

    return $this->redirectToRoute('reservations');
  }


}
