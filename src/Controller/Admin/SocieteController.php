<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Societe;
use App\Service\Table;
use App\Form\SocieteType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class SocieteController extends BaseController
{

  /**
   * @Route(methods={"GET"}, path="/admin/societes", name="societes")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/societe/index.html.twig', [
      'table' => $this->getTable($request, $user, $table)
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/societes/table", name="societes.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/societe/{id}/details", name="societe.details")
   * @IsGranted("ROLE_ADMIN")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $societe_id = $request->get('id');
    $societe = $this->getDoctrine()->getRepository(Societe::class)->findById($user, $societe_id);
    if (!$societe) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);
    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("Détails de la société"),
        'body' => $this->renderView('admin/societe/details.html.twig', [
          'societe' => $societe
        ])
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/societe/create", name="societe.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/form.html.twig', [
        'title' => $translator->trans("Ajouter une société"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/societe/{id}/update", name="societe.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/form.html.twig', [
        'title' => $translator->trans("Modifier une société"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/societe/{id}/store", name="societe.store", defaults={"id"=0})
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

    $em = $this->getDoctrine()->getManager();
    $entity = $form->getData();
    $isNew = !$entity->getId();

    $logo = $request->get('logo');
    if (isset($logo[0]) && !empty($logo[0])) {
      $entity->setFileName($logo[0]);
    } else {
      $entity->setFileName('');
    }
    $em->persist($entity);
    $em->flush();

    // log activity
    $em->getRepository(Log::class)->store(
      $user->getId(),
      $entity->getId(),
      'societe',
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'societes',
      'status' => 'success',
      'message' => $translator->trans("La société a bien été enregistrée")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/societe/{id}/delete", name="societe.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);

    $this->getDoctrine()->getRepository(Societe::class)
      ->createQueryBuilder('s')
      ->where('s.id IN(:items)')
      ->setParameter('items', $items)
      ->delete()
      ->getQuery()
      ->execute();

    if (count($items) > 1) {
      $message = $translator->trans("Les sociétés ont été supprimées");
    } else {
      $message = $translator->trans("La sociétés a bien été supprimée");
    }

    return $this->json([
      'tableId' => 'societes',
      'status'  => 'success',
      'message' => $message
    ]);
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('name', 'Nom', ['sortable' => true]);
    $table->addColumn('telephone', 'téléphone', ['sortable' => true]);
    $table->addColumn('email', 'Email', ['sortable' => true]);
    $table->addColumn('adress', 'Adresse', ['sortable' => true]);
    $table->addColumn('status', 'Statut', [
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
        $label = $entity->getStatusLabel();
        return "<span class='badge bg-{$class}'>{$label}</span>";
      }
    ]);
    $table->setPrimaryKey('id');
    $table->setOrder('s.id', 'ASC');
    $table->addAction('edit', [
      'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/societe/[id]/update'
    ]);
    $table->addAction('details', [
      'type'  => 'modal',
      'label' => 'Détails',
      'icon'  => 'bi bi-list-stars',
      'route' => '/admin/societe/[id]/details'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/societe/[id]'
    ]);
    /*$table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/societe/{$id}/delete";
      },
      'bulk_action' => true
    ]);*/

    $query = $this->getTableQuery($request, $user, $table);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $societeRepo = $this->getDoctrine()->getRepository(Societe::class);
    $query = $societeRepo->createQueryBuilder('s');

    return $query;
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Societe::class)->find($id);
    } else {
      $entity = new Societe();
    }
    $form = $this->createForm(SocieteType::class, $entity, [
      'user' => $user,
      'action' => $this->generateUrl('societe.store', ['id' => $id])
    ]);
    
    return $form->handleRequest($request);
  }

}
