<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Category;
use App\Service\Table;
use App\Form\CategoryType;
use App\Form\Search\CategorySearchType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class CategoryController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/categories", name="categories")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/category/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/categories/table", name="categories.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/categories/{id}/details", name="categories.details")
   * @IsGranted("ROLE_ADMIN")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $options = $this->getDoctrine()->getRepository(Category::class)->find($id);
    if (!$options) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);
    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("Détails d'une option"),
        'body' => $this->renderView('admin/category/details.html.twig', [
          'options' => $options
        ])
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/categories/create", name="categories.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $trajets = $this->getDoctrine()->getRepository(Category::class)->getItemsGroupedBySite();
    return $this->render('admin/category/form.html.twig', [
        'entity' => null,
        'trajets' => $trajets,
        'current_trajet' => '',
        'title' => $translator->trans("Ajouter une option"),
        'form' => $this->getForm($request, $user)->createView()
    ]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/categories/{id}/update", name="categories.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $entity = $this->getDoctrine()->getRepository(Category::class)->find($id);
    $trajets = $this->getDoctrine()->getRepository(Category::class)->getItemsGroupedBySite();

    if (!$entity) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Option not found"),
      ])
    ]);

    return $this->render('admin/category/form.html.twig', [
        'entity' => $entity,
        'trajets' => $trajets,
        'current_trajet' => $entity->getTrajet(),
        'title' => $translator->trans("Editer une option"),
        'form' => $this->getForm($request, $user)->createView()
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/categories/{id}/store", name="categories.store", defaults={"id"=0})
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
      "category",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'categories',
      'status' => 'success',
      'message' => $translator->trans("Option enregistrée avec succès")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/categories/{id}/delete", name="categories.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);

    $this->getDoctrine()->getRepository(Category::class)
      ->createQueryBuilder('c')
      ->where('c.id IN(:items)')
      ->setParameter('items', $items)
      ->delete()
      ->getQuery()
      ->execute();

    if (count($items) > 1) {
      $message = $translator->trans("Les options ont été supprimées");
    } else {
      $message = $translator->trans("L'option a bien été supprimée");
    }

    return $this->json([
      'tableId' => 'options',
      'status'  => 'success',
      'message' => $message
    ]);
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('name', 'Name', ['sortable' => true]);
    $table->addColumn('site', 'Site', ['sortable' => true]);
    $table->addColumn('trajet', 'Trajet', ['sortable' => true]);
    $table->addColumn('category', 'Catégorie', ['sortable' => true]);
    $table->addColumn('direction', 'Direction', ['sortable' => true]);
    $table->addColumn('status', 'Statut', ['sortable' => true]);

    $table->setPrimaryKey('id');
    $table->setOrder('c.id', 'DESC');
    $table->addAction('edit', [
      //'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/categories/[id]/update'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/categories/[id]'
    ]);
    /*$table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/categories/{$id}/delete";
      },
      'bulk_action' => true
    ]);*/

    $query = $this->getTableQuery($request, $user);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $optionsRepo = $this->getDoctrine()->getRepository(Category::class);
    $query = $optionsRepo->createQueryBuilder('c');

    // search params
    $keywords = $request->get('q');
    $category = $request->get('category');
    $direction = $request->get('direction');
    $status = $request->get('status');
    $site = $request->get('site');

    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['c.name']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }

    if ($site) {
      $params['site'] = $site;
      $query->andWhere('c.site = :site');
    }
    if ($category) {
      $params['category'] = $category;
      $query->andWhere('c.category = :category');
    }
    if ($status) {
      $params['status'] = $status;
      $query->andWhere('c.status = :status');
    }
    if ($direction) {
      $params['direction'] = $direction;
      $query->andWhere('c.direction = :direction');
    }

    $query->setParameters($params);

    return $query;
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Category::class)->find($id);
    } else {
      $entity = new Category();
    }
    $form = $this->createForm(CategoryType::class, $entity, [
      //'user' => $user,
      'action' => $this->generateUrl('categories.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request)
  {
    return $this->createForm(CategorySearchType::class, null, [
      'method' => 'GET',
      'request' => $request,
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

}
