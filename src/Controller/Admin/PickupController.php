<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Pickup;
use App\Entity\Trajet;
use App\Service\Table;
use App\Form\PickupType;
use App\Form\Search\PickupSearchType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Entity\ReservationEntries;
use App\Entity\Reservation;
class PickupController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/pickups", name="pickups")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/pickup/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/pickups/table", name="pickups.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/pickups/{id}/details", name="pickups.details")
   * @IsGranted("ROLE_ADMIN")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $options = $this->getDoctrine()->getRepository(Pickup::class)->find($id);
    if (!$options) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);
    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("Détails d'un point de ramassage"),
        'body' => $this->renderView('admin/pickup/details.html.twig', [
          'options' => $options
        ])
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/pickups/create", name="pickups.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => $translator->trans("Ajouter un point de ramassage"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/pickups/{id}/update", name="pickups.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $entity = $this->getDoctrine()->getRepository(Pickup::class)->find($id);

    if (!$entity) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Point de ramassage not found"),
      ])
    ]);

    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => 'Modifier un point de ramassage',
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/pickups/{id}/store", name="pickups.store", defaults={"id"=0})
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
      "pickup",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'pickups',
      'status' => 'success',
      'message' => $translator->trans("Point de ramassage enregistrée avec succès")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/pickups/{id}/delete", name="pickups.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
      $items = $request->get('items', [$request->get('id', 0)]);
  
      // Get the Doctrine entity manager
      $entityManager = $this->getDoctrine()->getManager();
  
      // Delete the pickup points
      $entityManager->getRepository(Pickup::class)
          ->createQueryBuilder('c')
          ->where('c.id IN(:items)')
          ->setParameter('items', $items)
          ->delete()
          ->getQuery()
          ->execute();
  
      // Update Reservation entities
      $reservationRepository = $entityManager->getRepository(Reservation::class);
      $reservations = $reservationRepository->createQueryBuilder('r')
          ->where('r.pickup_entree_id IN(:items) OR r.pickup_sortie_id IN(:items)')
          ->setParameter('items', $items)
          ->getQuery()
          ->getResult();
  
      foreach ($reservations as $reservation) {
          if (in_array($reservation->getPickupEntreeId(), $items)) {
              $reservation->setPickupEntree(null);
              $reservation->setAdresseEntree(null);
              $reservation->setPickupLatitude(null);
              $reservation->setPickupLongitude(null);
          }
          if (in_array($reservation->getPickupSortieId(), $items)) {
              $reservation->setPickupSortie(null);
              $reservation->setAdresseSortie(null);
              $reservation->setPickupLatitude(null);
              $reservation->setPickupLongitude(null);
          }
      }
  
      // Update ReservationEntries entities
      $reservationEntriesRepository = $entityManager->getRepository(ReservationEntries::class);
      $reservationEntries = $reservationEntriesRepository->createQueryBuilder('re')
          ->where('re.pickup_id IN(:items)')
          ->setParameter('items', $items)
          ->getQuery()
          ->getResult();
  
      foreach ($reservationEntries as $reservationEntry) {
          $reservationEntry->setPickup(null);
          $reservationEntry->setPickupLatitude(null);
          $reservationEntry->setPickupLongitude(null);
      }
  
      // Flush all changes to the database
      $entityManager->flush();
  
      if (count($items) > 1) {
          $message = $translator->trans("Les points de ramassage ont été supprimés");
      } else {
          $message = $translator->trans("le point de ramassage a bien été supprimé");
      }
  
      return $this->json([
          'tableId' => 'pickups',
          'status'  => 'success',
          'message' => $message
      ]);
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('name', 'Nom', ['sortable' => true]);
    $table->addColumn('trajet', 'Trajet', ['sortable' => true]);
    //$table->addColumn('direction', 'Direction', ['sortable' => true]);
    //$table->addColumn('heure', 'Heure de passage', ['sortable' => true]);

   /* $table->addColumn('heure', 'Heure de passage', [
      'sortable' => true,
      'render' => function($entity) {
        $heure = $entity->getHeure();
        return empty($heure) ? '' : $heure->format('H:i');
      }
    ]);*/

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
    $table->setOrder('p.trajet_id, p.direction, p.heure', 'ASC');
    $table->addAction('edit', [
      'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/pickups/[id]/update'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/pickup/[id]'
    ]);
    $table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/pickups/{$id}/delete";
      },
      'bulk_action' => true
    ]);

    $query = $this->getTableQuery($request, $user);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $optionsRepo = $this->getDoctrine()->getRepository(Pickup::class);
    $query = $optionsRepo->createQueryBuilder('p');

    // search params
    $keywords = $request->get('q');
    $pickup = $request->get('pickup');
    $direction = $request->get('direction');
    $status = $request->get('status');
    $trajet = $request->get('trajet');

    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['p.name']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }

    if ($trajet) {
      $params['trajet'] = $trajet;
      $query->andWhere('p.trajet = :trajet');
    }
    if ($status) {
      $params['status'] = $status;
      $query->andWhere('p.status = :status');
    }
    if ($direction) {
      $params['direction'] = $direction;
      $query->andWhere('p.direction = :direction');
    }

    $query->setParameters($params);

    return $query;
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Pickup::class)->find($id);
    } else {
      $entity = new Pickup();
    }
    $form = $this->createForm(PickupType::class, $entity, [
      //'user' => $user,
      'action' => $this->generateUrl('pickups.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request)
  {
    return $this->createForm(PickupSearchType::class, null, [
      'method' => 'GET',
      'request' => $request,
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }


}
