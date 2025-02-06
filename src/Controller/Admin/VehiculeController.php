<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Service\Table;
use App\Entity\Setting;
use App\Entity\Vehicule;
use App\Entity\Contrat;
use App\Entity\Service;
use App\Entity\Rappel;
use App\Entity\Entretien;
use App\Controller\BaseController;
use App\Form\VehiculeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Search\VehiculeSearchType;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class VehiculeController extends BaseController
{

  /**
   * @Route(methods={"GET"}, path="/admin/vehicules", name="vehicules")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Request $request, Table $table)
  {
    return $this->render('admin/vehicule/index.html.twig', [
      'table' => $this->getTable($request, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/vehicule/{id}/details", name="vehicule.details")
   * @IsGranted("ROLE_ADMIN")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $settingRepo = $this->getDoctrine()->getRepository(Setting::class);
    $marques = $settingRepo->get('vehicule.marques');
    $modeles = $settingRepo->get('vehicule.modeles');
    $types = $settingRepo->get('vehicule.types');
    $groupes = $settingRepo->get('vehicule.groupes');
    $type_moteurs = $settingRepo->get('vehicule.type_moteurs');
    
    $vehicule = $this->getDoctrine()->getRepository(Vehicule::class)->find($id);
    if (!$vehicule) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);

    return $this->render('admin/vehicule/details.html.twig', [
      'vehicule' => $vehicule,
      'marques' => $marques,
      'modeles' => $modeles,
      'types' => $types,
      'groupes' => $groupes,
      'type_moteurs' => $type_moteurs,
      'title' => $translator->trans("Détails du véhicule")
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/vehicules/table", name="vehicules.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Request $request, Table $table)
  {
    return new Response($this->getTable($request, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/vehicules/export", name="vehicules.export")
   * @IsGranted("ROLE_ADMIN")
   */
  public function export(Request $request, TranslatorInterface $translator, Table $table)
  {
    $format = $request->get('format', 'xlsx');
    $query = $this->getTable($request, $table, true);
    $filename = $translator->trans("Liste des véhicules %date%", ['date' => date('d-m-Y Hi')]);
    return $table->export($query, $filename, $format);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/vehicule/create", name="vehicule.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, TranslatorInterface $translator)
  {
    $form = $this->getForm($request)->createView();
    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'form' => $form,
        'title' => $translator->trans("Ajouter un véhicule"),
        'body' => $this->renderView('admin/vehicule/form.html.twig', compact('form'))
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/vehicule/{id}/update", name="vehicule.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, TranslatorInterface $translator)
  {
    $form = $this->getForm($request)->createView();
    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'form' => $form,
        'title' => $translator->trans("Modifier un véhicule"),
        'body' => $this->renderView('admin/vehicule/form.html.twig', compact('form'))
      ])
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/vehicule/{id}/store", name="vehicule.store")
   * @IsGranted("ROLE_ADMIN")
   */
  public function store( Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    // validate form data
    $form = $this->getForm($request);
    if (!$form->isValid()) return $this->json([
      'status' => 'error',
      'message' => (string) $form->getErrors(true, false)
    ]);
    $entity = $form->getData();
    $isNew = !$entity->getId();
    $em = $this->getDoctrine()->getManager();
    $vehiculeRepo = $em->getRepository(Vehicule::class);
    // check if matricule already in use
    if ($vehiculeRepo->exists($entity)) {
      return $this->json([
        'status' => 'error',
        'message' => $translator->trans("Matricule existe déjà !")
      ]);
    }
    // set images
    $images = array_map(function ($image) {
      return json_decode($image);
    }, $request->get('images', []));
    $imagesPaths = array_column($images, 'path');
    foreach ($entity->getImages() as $image) {
      if (!in_array($image['path'], $imagesPaths)) {
        $this->removeFile($image['path']);
      }
    }
    $entity->setImages($images);
    $entity->setMarque($entity->getModele()->getMarque());

    $em->persist($entity);
    $em->flush();
    // log activity
    $log_name = $isNew ? 'create' : 'update';
    $em->getRepository(Log::class)->store($user->getId(), $entity->getId(), 'vehicule', $log_name);
    return $this->json([
      'tableId' => 'vehicules',
      'status' => 'success',
      'message' => $translator->trans("Le véhicule a bien été sauvegardée")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/vehicule/{id}/delete", name="vehicule.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $em = $this->getDoctrine()->getManager();
    $logRepo = $em->getRepository(Log::class);
    $vehiculeRepo = $em->getRepository(Vehicule::class);
    $items = $request->get('items', [$request->get('id', 0)]);

    $vehicules = $vehiculeRepo->createQueryBuilder('v')
      ->where('v.id IN(:items)')
      ->setParameter('items', $items)
      ->getQuery()
      ->getResult();

    foreach ($vehicules as $vehicule) {
      $em->remove($vehicule);
      $logRepo->store($user->getId(), $vehicule->getId(), 'vehicule', 'delete');
    }
    $em->flush();

    return $this->json([
      'tableId' => 'vehicules',
      'status'  => count($vehicules) > 0 ? 'success' : 'info',
      'message' => $translator->trans("%count% vehicule(s) supprimé(s)", [
        '%count%' => count($vehicules)
      ])
    ]);
  }

  private function getTable($request, $table, $asQuery = false)
  {
    $settingRepo = $this->getDoctrine()->getRepository(Setting::class);
    $types = $settingRepo->get('vehicule.types');
    $groupes = $settingRepo->get('vehicule.groupes');

    $table->addColumn('increment', '#');
    $table->addColumn('immatriculation', 'Immatriculation');
    $table->addColumn('marque', 'Marque');
    $table->addColumn('modele', 'Modèle');
    $table->addColumn('seats', 'Places');
    $table->addColumn('type', 'Type', [
      'sortable' => true,
      'render' => function($entity) use ($types) {
        $type_id = $entity->getTypeId();
        return isset($types[$type_id]) ? $types[$type_id] : '';
      }
    ]);
    if ($asQuery) {
      $table->addColumn('etat', 'Etat physique du véhicule', [
        'sortable' => true,
        'render' => function($entity) use ($groupes) {
          $groupe_id = $entity->getGroupeId();
          return isset($groupes[$groupe_id]) ? $groupes[$groupe_id] : '';
        }
      ]);
      $table->addColumn('mise_en_circulation', 'Date de mise en circulation', [
        'sortable' => true,
        'render' => function($entity) {
          return $entity->getDateCirculation() ? $entity->getDateCirculation()->format('d/m/Y') : '';
        }
      ]);
      $table->addColumn('kilometrage', 'Kilométrage de départ', [
        'sortable' => true,
        'render' => function($entity) {
          return $entity->getKilometrage();
        }
      ]);
      $table->addColumn('immatriculation', 'Plaque d’immatriculation', [
        'sortable' => true,
        'render' => function($entity) {
          return $entity->getImmatriculation();
        }
      ]);
      $table->addColumn('aquisition', 'Date d’acquisition', [
        'sortable' => true,
        'render' => function($entity) {
          return $entity->getDateExpLicence() ? $entity->getDateExpLicence()->format('d/m/Y') : '';
        }
      ]);
      $table->addColumn('numero_chassis', 'Numéro de châssis', [
        'sortable' => true,
        'render' => function($entity) {
          return $entity->getNumeroChassis();
        }
      ]);
    }
    $table->addColumn('user', 'Chauffeur');
    $table->addColumn('en_service', 'En service?', [
      'sortable' => true,
      'render' => function($entity) {
        return $entity->getEnService() ? 'Oui' : 'Non';
      }
    ]);

    $table->setPrimaryKey('id');
    $table->setOrder('v.id', 'desc');
    $table->addAction('edit', [
      'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/vehicule/[id]/update'
    ]);
    $table->addAction('details', [
      //'type'  => 'modal',
      'label' => 'Détails',
      'icon'  => 'bi bi-list-stars',
      'route' => '/admin/vehicule/[id]/details'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/vehicule/[id]'
    ]);
    $table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/vehicule/{$id}/delete";
      },
      'bulk_action' => true
    ]);
    $query = $this->getTableQuery($request);

    if ($asQuery) {
      return $query;
    }
    
    return $table->render($query);
  }

  private function getTableQuery($request)
  {
    $vehiculeRepo = $this->getDoctrine()->getRepository(Vehicule::class);
    $query = $vehiculeRepo->createQueryBuilder('v');

    $params = [];
    if ($keywords = $request->get('q')) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, [
        'v.annee', 
        'v.immatriculation', 
        'v.kilometrage'
      ]);
      $query->andWhere($result['clauses']);
      $params = array_merge($params, $result['params']);
    }
    if ($marque_id = $request->get('marque_id')) {
      $params['marque_id'] = $marque_id;
      $query->andWhere('v.marque_id = :marque_id');
    }
    if ($modele_id = $request->get('modele_id')) {
      $params['modele_id'] = $modele_id;
      $query->andWhere('v.modele_id = :modele_id');
    }
    if ($type_id = $request->get('type_id')) {
      $params['type_id'] = $type_id;
      $query->andWhere('v.type_id = :type_id');
    }
    if ($en_service = $request->get('en_service')) {
      $params['en_service'] = $en_service;
      $query->andWhere('v.en_service = :en_service');
    }

    $query->setParameters($params);

    return $query;
  }

  private function getSearchForm($request)
  {
    return $this->createForm(VehiculeSearchType::class, null, [
      'method' => 'GET',
      'csrf_protection' => false
    ])->handleRequest($request);
  }

  private function getForm($request)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Vehicule::class)->find($id);
    } else {
      $entity = new Vehicule();
    }
    $form = $this->createForm(VehiculeType::class, $entity, [
      'action' => $this->generateUrl('vehicule.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

}
