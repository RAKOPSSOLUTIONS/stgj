<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Service\Table;
use App\Entity\Setting;
use App\Form\SettingType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class SettingController extends BaseController
{

  /**
   * @Route(methods={"GET"}, path="/admin/settings", name="settings")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Table $table)
  {
    return $this->render('admin/setting/index.html.twig', [
      'table' => $this->getTable($table)
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/settings/table", name="settings.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Table $table)
  {
    return new Response($this->getTable($table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/settings/create", name="setting.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('admin/setting/form.html.twig', [
        'title' => $translator->trans("Ajouter un paramètre"),
        'form' => $this->getForm($request, $user)->createView(),
        'types' => Setting::FIELD_TYPES,
        'field_options' => []
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/settings/{id}/update", name="setting.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $form = $this->getForm($request, $user);
    return $this->json([
      'content' => $this->renderView('admin/setting/form.html.twig', [
        'title' => $translator->trans("Modifier un paramètre"),
        'form' => $form->createView(),
        'types' => Setting::FIELD_TYPES,
        'field_options' => $form->getData()->getValue(true)
      ])
    ]);
  }

   /**
   * @Route(methods={"POST"}, path="/admin/settings/{id}/store", name="setting.store", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function store(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    // validate form data
    $form = $this->getForm($request, $user);
    if (!$form->isValid()) return $this->json([
      'status' => 'error',
      'message' => (string) $form->getErrors(true, false)
    ]);

    $entity = $form->getData();
    $isNew = !$entity->getId();
    
    $em = $this->getDoctrine()->getManager();
    $settingRepo = $em->getRepository(Setting::class);

    // check if name already in use
    if ($settingRepo->exists($entity)) {
      return $this->json([
        'status' => 'error',
        'message' => $translator->trans("Ce nom est déjà utilisé")
      ]);
    }

    // set value
    $value = $request->get('value');
    $type = $entity->getFieldType();
    if (isset($value[$type]) && !empty($value[$type])) {
      if (is_array($value[$type])) {
        $values = array_filter($value[$type]);
        $options = array_map(function($id, $label) {
          return "$id=>$label";
        }, array_keys($values), $values);
        $entity->setValue(implode("\n", $options));
      } else {
        $entity->setValue($value[$type]);
      }
    } else {
      $entity->setValue(null);
    }
    
    $em->persist($entity);
    $em->flush();

    // log activity
    $action_name = $isNew ? 'create' : 'update';
    $em->getRepository(Log::class)->store($user->getId(), $entity->getId(), 'setting', $action_name);

    return $this->json([
      'tableId' => 'settings',
      'status' => 'success',
      'message' => $translator->trans("Le paramètre a bien été sauvegardée")
    ]);
  }

  private function getTable($table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('name', 'Name');
    $table->addColumn('type', 'Type', [
      'sortable' => true,
      'render' => function($entity) {
        $label = $entity->getTypeLabel();
        return "<span class='badge bg-dark'>{$label}</span>";
      }
    ]);
    $table->addColumn('description', 'Description', ['sortable' => true]);
    
    $table->setPrimaryKey('id');
    $table->setOrder('s.name', 'asc');

    $table->addAction('edit', [
      'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/settings/[id]/update'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/setting/[id]'
    ]);

    $query = $this->getTableQuery();

    return $table->render($query);
  }

  private function getTableQuery()
  {
    $settingRepo = $this->getDoctrine()->getRepository(Setting::class);
    $query = $settingRepo->createQueryBuilder('s');
    $query->where('s.editable = 1');
    return $query;
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Setting::class)->find($id);
    } else {
      $entity = new Setting();
    }
    $form = $this->createForm(SettingType::class, $entity, [
      'action' => $this->generateUrl('setting.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

}
