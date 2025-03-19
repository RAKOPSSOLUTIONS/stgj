<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\User;
use App\Entity\Societe;
use App\Entity\Site;
use App\Entity\Pickup;
use App\Form\UserType;
use App\Service\Table;
use App\Entity\MailHistory;
use App\Controller\BaseController;
use App\Entity\ReservationEntries;
use App\Entity\Vehicule;
use App\Form\Search\UserSearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Uid\Uuid;

 
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;

use App\Form\ExcelUploadType;
use PhpOffice\PhpSpreadsheet\IOFactory;


class UserController extends BaseController
{

  private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

  /**
   * @Route(methods={"GET"}, path="/admin/users", name="users")
   * @IsGranted("ROLE_MANAGER")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {

    //findOrCreate

     $em = $this->getDoctrine()->getManager();
     $users = $this->getDoctrine()->getRepository(User::class)->findAll();
     foreach ($users as $user) {
       $pickup  = $this->getDoctrine()->getRepository(Pickup::class)->findOrCreate($user->getLatitude(), $user->getLongitude(), $user->getAdresse());
       $user->setPickup($pickup);
       $em->persist($user);  
     } 
     $em->flush();

    return $this->render('admin/user/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request, $user)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/users/table", name="users.table")
   * @IsGranted("ROLE_MANAGER")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET","POST"}, path="/admin/user/adhesion", name="user.adhesion")
   */
  public function adhesion(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    if ( $user->getSociete() && $user->getSociete()->getAdhesion() ){

      //if post
      if ( $request->isMethod('POST') ){

        $adhesion = isset($_POST['adhesion']) ? (int)$_POST['adhesion'] : 0;
        if ( $user->getAdhesion() != $adhesion ){
          $user->setAdhesion($adhesion);
          $user->setDateAdhesion(new \DateTime());
          $em = $this->getDoctrine()->getManager();
          $em->persist($user);
          $em->flush();

          $em->getRepository(Log::class)->store(
            $user->getId(),
            $user->getId(),
            'user',
            'adhesion'
          );

          $this->addFlash( 'success', "Adhésion changée avec succès");
        }
        
        return $this->redirectToRoute('user.details', ['id' => $user->getId() ]);
      }
      return $this->render('admin/user/adhesion.html.twig', [
      'user' => $user,
      ]);

    }
    else{
      return $this->redirectToRoute('user.details', ['id' => $user->getId() ]);
    }

     
  }

  /**
   * @Route(methods={"GET"}, path="/admin/user/{id}/details", name="user.details")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $user_id = $request->get('id');
    $user = $this->getDoctrine()->getRepository(User::class)->findById($user, $user_id);

    if (!$user) {
      $this->addFlash( 'error', "Vous n'avez pas le droit d'accéder à cette ressource");

      return $this->redirectToRoute('reservations');
    }

    return $this->render('admin/user/details.html.twig', [
      'user' => $user,
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/user/location", name="user.location")
   */
  public function location(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    if ( $request->isMethod('POST') ){
       
      $latitude = isset($_POST['latitude']) ? $_POST['latitude'] : '';
      $longitude = isset($_POST['longitude']) ? $_POST['longitude'] : '';

      $em = $this->getDoctrine()->getManager();
      $user->setLatitude($latitude);
      $user->setLongitude($longitude);
      $em->persist($user);
      $em->flush();

      $this->addFlash( 'success', "Vos cordonnées GPS ont été enregistré avec succès");

      return $this->redirectToRoute('reservations');

    }
    else{
       
      return $this->render('admin/user/location.html.twig', []);
    }
    
  }

  /**
   * @Route(methods={"GET"}, path="/admin/user/{id}/enable", name="user.enable")
   * @IsGranted("ROLE_ADMIN")
   */
  public function enable(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $user_id = $request->get('id');
    $current_user = $user;
    $user = $this->getDoctrine()->getRepository(User::class)->findById($user, $user_id);
    $em = $this->getDoctrine()->getManager();
    if (!$user) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);

    if ( $user->getStatus() == 'inactive' ){
      $user->setStatus('active');
      $uuid = Uuid::v4();
      $user->setUid($uuid->toRfc4122());
      $this->generateQr($user->getUid());
      $em->persist($user);
      $em->flush();

      $em->getRepository(Log::class)->store(
      $current_user->getId(),
      $user->getId(),
      'user',
      'enable'
    );

      $em->getRepository(MailHistory::class)->log([
        'template' => 'activate',
        'receiver' => $user->getEmail(),
        'subject' => 'Activation de votre compte',
        'cc'       => [],
        'variables' => [
          'entity_id' => $user->getId(),
          'entity_name' => 'user'
        ]
      ]);

      $this->addFlash( 'danger', "Le compte a été activé avec succès");

    }

    return $this->redirectToRoute('users');
  }

  /**
   * @Route(methods={"GET"}, path="/admin/user/{id}/disable", name="user.disable")
   * @IsGranted("ROLE_ADMIN")
   */
  public function disable(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $user_id = $request->get('id');
    $current_user = $user;
    $user = $this->getDoctrine()->getRepository(User::class)->findById($user, $user_id);
    $em = $this->getDoctrine()->getManager();
    if (!$user) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);

    if ( $user->getStatus() == 'active' ){
      $user->setStatus('inactive');
      $em->persist($user);
      $em->flush();

      $em->getRepository(Log::class)->store(
      $current_user->getId(),
      $user->getId(),
      'user',
      'disable'
    );

      $em->getRepository(MailHistory::class)->log([
        'template' => 'desactivate',
        'receiver' => $user->getEmail(),
        'subject' => 'Désactivation de votre compte',
        'cc'       => [],
        'variables' => [
          'entity_id' => $user->getId(),
          'entity_name' => 'user'
        ]
      ]);

      $this->addFlash( 'danger', "Le compte a été désactivé avec succès");
    }

    return $this->redirectToRoute('users');
  }

  /**
   * @Route(methods={"GET"}, path="/admin/user/create", name="user.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => $translator->trans("Ajouter un utilisateur"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/user/{id}/update", name="user.update")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {

    $id = $request->get('id');
    $current_user = $user;
   
    $user = $this->getDoctrine()->getRepository(User::class)->findById($user, $id);

    if (!$user) {
      $this->addFlash( 'error', "Vous n'avez pas le droit d'accéder à cette ressource");

      return $this->redirectToRoute('user.details', ['id' => $user->getId()]);
    }

    if ( $user->getUpdatesCount() >= 5 ) {
      $this->addFlash( 'error', "La mise à jour de vos informations est limitée à 5 fois");

      return $this->redirectToRoute('user.details', ['id' => $user->getId()]);
    }

    $form = $this->getForm($request, $user);
    $entity = $form->getData();

    //34.000487, lng: -6.857256 

    $latitude = !empty($user->getLatitude()) ? $user->getLatitude() : $user->getSite()->getLatitude();
    $longitude = !empty($user->getLongitude()) ? $user->getLongitude() : $user->getSite()->getLongitude();

    if ($user->getId() == $request->get('id')) {
      $title = $translator->trans("Modifier mes informations");
    } else {
      $title = $translator->trans("Modifier un utilisateur");
    }

    return $this->render('admin/user/form.html.twig', [
      'entity' => $entity,
      'title' => $title,
      'latitude' => $latitude,
      'longitude' => $longitude,
      'form' => $form->createView(),
    ]);

  }

  /**
   * @Route(methods={"POST"}, path="/admin/user/{id}/store", name="user.store", defaults={"id"=0})
   */
  public function store(
    Request $request, 
    UserInterface $user, 
    TranslatorInterface $translator, 
    UserPasswordHasherInterface $passwordHasher
  ) {
    // validate form data
    $form = $this->getForm($request, $user);
    if (!$form->isValid()) {
      return $this->json([
        'status' => 'error',
        'message' => (string) $form->getErrors(true, false)
      ]);
    }
    $entity = $form->getData(); 
    $isNew = !$entity->getId();
    $em = $this->getDoctrine()->getManager();
    $userRepo = $em->getRepository(User::class);
    $isOwner = $user->getId() == $entity->getId();
    //set societe
    if ( $entity->getSite() ){
      $entity->setSociete( $entity->getSite()->getSociete() );
    }
    // check if can update
    if (!$isNew && !$isOwner && !$this->isGranted('ROLE_ADMIN')) {
      return $this->json([
        'status' => 'error',
        'message' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ]);
    }
    if ($isNew) {
      $entity->setStatus('active');
      $uuid = Uuid::v4();
      $entity->setUid($uuid->toRfc4122());
    }
    // check if password matches
    $password = $form['password']->getData();
    $confirm_password = $form['confirm_password']->getData();
    if (
      ($isNew && empty($password)) || 
      (!empty($password) && $password != $confirm_password)
    ) {
      return $this->json([
        'status' => 'error',
        'message' => $translator->trans("Les deux mots de passe ne sont pas identiques")
      ]);
    }
    // check if email already in use
    if ($userRepo->exists($entity)) {
      return $this->json([
        'status' => 'error',
        'message' => $translator->trans("Cet utilisateur existe déjà ")
      ]);
    }

    if ( !$isNew ){
      $user->setUpdatesCount($user->getUpdatesCount() + 1);
    }

    // hash password
    if (!empty($password)) {
      $entity->setPassword($passwordHasher->hashPassword($entity, $password));
    }
    // set role
    if (isset($form['role_name'])) {
      $entity->setRoles(['ROLE_'. strtoupper($form['role_name']->getData())]);
    }
    //notification d'activation 

    $em->persist($entity);
    $em->flush();
    // log activity
    if ($isNew) {
      $action_name = 'create';
    } else if (!empty($password)) {
      $action_name = 'password';
    } else {
      $action_name = 'update';
    }
    $em->getRepository(Log::class)->store(
      $user->getId(),
      $entity->getId(),
      'user',
      $action_name
    );
    // response message
    if ($isOwner) {
      $message = $translator->trans("Votre compte a bien été mis à jour");
    } else {
      $message = $translator->trans("L'utilisateur a bien été sauvegardée");
    }

    return $this->json([
      'tableId' => 'users',
      'status' => 'success',
      'message' => $message
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/user/{id}/delete", name="user.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
      $em = $this->getDoctrine()->getManager();
      $logRepo = $em->getRepository(Log::class);
      $userRepo = $em->getRepository(User::class);
      $vehiculeRepo = $em->getRepository(Vehicule::class);
      $reservationRepo = $em->getRepository(ReservationEntries::class);
  
      // Get the items to delete (either from 'items' array or 'id' parameter)
      $items = $request->get('items', [$request->get('id', 0)]);
  
      // Fetch the users to delete
      $users = $userRepo->createQueryBuilder('u')
          ->where('u.id IN(:items)')
          ->setParameter('items', $items)
          ->getQuery()
          ->getResult();
  
      $user_id = $user->getId();
      $deletedCount = 0;
  
      foreach ($users as $user) {
          // Check if the user has no reservations
          if (count($user->getReservations()) > 0) {
              // Set related Vehicule entries to null
              // Set related ReservationEntries to null
              $reservations = $reservationRepo->findBy(['user_id' => $user]);
              foreach ($reservations as $reservation) {
                  $reservation->setUser(null);
                  $em->persist($reservation);
              }
          }



          $vehicules = $vehiculeRepo->findBy(['user_id' => $user]);
          if(count($vehicules) > 0){
            foreach ($vehicules as $vehicule) {
              $vehicule->setUser(null);
              $em->persist($vehicule);
          }
          }

          $em->remove($user);
          $logRepo->store($user_id, $user->getId(), 'user', 'delete');
          $deletedCount++;
      }
  
      // Flush all changes to the database
      $em->flush();
  
      return $this->json([
          'tableId' => 'users',
          'status'  => $deletedCount > 0 ? 'success' : 'info',
          'message' => $translator->trans("%count% utilisateur(s) supprimé(s)", [
              '%count%' => $deletedCount
          ])
      ]);
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('matricule', 'Matricule', ['sortable' => true]);
    $table->addColumn('societe', 'Societé', ['sortable' => true]);
    $table->addColumn('site', 'Site', ['sortable' => true]);
    $table->addColumn('prenom', 'Nom', ['sortable' => true]);
    $table->addColumn('nom', 'Prénom', ['sortable' => true]);
    $table->addColumn('email', 'Email', ['sortable' => true]);
    
    if ( $user->isAdmin() ) $table->addColumn('role', 'Role', [
      'sortable' => true,
      'render' => function($entity) {
        $label = $entity->getRoleLabel();
        return "<span class='badge bg-dark'>{$label}</span>";
      }
    ]);
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
        $label = $entity->getStatusLabel();
        return "<span class='badge bg-{$class}'>{$label}</span>";
      }
    ]);
    $table->setPrimaryKey('id');
    $table->setOrder('u.id', 'DESC');
    $table->addAction('edit', [
      //'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/user/[id]/update',
      'display' => function($entity) use($user) {
        return $entity->getId()==$user->getId() or $this->isGranted('ROLE_ADMIN');
      }
    ]);
    $table->addAction('details', [
      //'type'  => 'modal',
      'label' => 'Détail',
      'icon'  => 'bi bi-list-stars',
      'route' => '/admin/user/[id]/details'
    ]);
   $table->addAction('disable', [
      'icon'  => 'bi bi-toggle-off',
      'route' => '/admin/user/[id]/disable',
      'label' => 'Désactiver',
      'display' => function($entity) use($user) {
        return $entity->getStatus()=='active' && $this->isGranted('ROLE_ADMIN');
      }
    ]);
   $table->addAction('enable', [
      'icon'  => 'bi bi-toggle-on',
      'route' => '/admin/user/[id]/enable',
      'label' => 'Activer',
      'display' => function($entity) use($user) {
        return $entity->getStatus()=='inactive'  && $this->isGranted('ROLE_ADMIN');
      }
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/user/[id]'
    ]);
    $table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/user/{$id}/delete";
      },
      'bulk_action' => true,
    ]);
    $query = $this->getTableQuery($request, $user);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $userRepo = $this->getDoctrine()->getRepository(User::class);
    $query = $userRepo->createQueryBuilder('u');

    //Filtre par société
    //$params['societe_id'] = $user->getSociete()->getId();
    //$query->andWhere('u.societe_id = :societe_id');

    // search params
    $keywords = $request->get('q');
    $societe_id = $request->get('sid');
    $direction_id = $request->get('did');
    $status = $request->get('status');
    $role = $request->get('role');
    $site = $request->get('site');

    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['u.nom', 'u.prenom', 'u.email', 'u.matricule', 'u.projet']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }
    if ($role) {
      $params['role'] = '%role_'.$role.'%';
      $query->andWhere('u.roles LIKE :role');
    }

    if ( !$user->isAdmin() ) {
      $params['societe_id'] = $user->getSociete()->getId();
      $query->andWhere('u.societe_id = :societe_id');
      $params['role'] = '%role_user%';
      $query->andWhere('u.roles LIKE :role');
    }
 
    
    if ($status) {
      $params['status'] = $status;
      $query->andWhere('u.status = :status');
    }
    if ($site) {
      $params['site'] = $site;
      $query->andWhere('u.site_id = :site');
    }

    $query->setParameters($params);

    return $query;
  }

  private function getSearchForm($request, $user)
  {
    return $this->createForm(UserSearchType::class, null, [
      'role' => $request->get('role'),
      'user' => $user,
      'method' => 'GET',
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(User::class)->find($id);
    } else {
      $entity = new User();
    }
    $form = $this->createForm(UserType::class, $entity, [
      'user' => $user,
      'action' => $this->generateUrl('user.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function generateQr($token, $societe = 'STJG')
  {
    //generate qr code
    $writer = new PngWriter();
    //$token = bin2hex(random_bytes(16));
    // Create QR code
    //$checkin_url = 'http://reservation.stjg.ma/reservation_entries/'.$token.'/checkin';
    $checkin_url = $this->generateUrl('reservation_entries.checkin', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);
    $qrCode = QrCode::create($token) //$checkin_url
      ->setData($checkin_url)
      ->setEncoding(new Encoding('UTF-8'))
      ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
      ->setSize(150)
      ->setMargin(10)
      ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
      ->setForegroundColor(new Color(0, 0, 0))
      ->setBackgroundColor(new Color(255, 255, 255));

    // Create generic logo
    $webPath = $this->getParameter('kernel.project_dir') . '/public/assets/img/logo-stjg.png';
    $logo = Logo::create($webPath)->setResizeToWidth(50);

    // Create generic label
    $label = Label::create($societe)
      ->setTextColor(new Color(0, 0, 0));

    $result = $writer->write($qrCode, $logo, $label);

    // Save it to a file
    $result->saveToFile($this->getParameter('kernel.project_dir') . '/public/uploads/users/' . $token . '.png');
  }

  /**
     * @Route("/admin/user/import", name="users.import")
     * @IsGranted("ROLE_ADMIN")
     */
    public function import(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        // Create the form
        $form = $this->createForm(ExcelUploadType::class);
        $form->handleRequest($request);
          
        if ($form->isSubmitted() && $form->isValid()) {
            // Get the uploaded file
            $file = $form->get('excelFile')->getData();

            $entityManager = $this->getDoctrine()->getManager();
            

            // Ensure the file is uploaded
            if ($file) {
                // Load the Excel file
                $spreadsheet = IOFactory::load($file->getPathname());

                // Access the first worksheet
                $worksheet = $spreadsheet->getActiveSheet();
                $data = [];

                // Loop through rows and columns
                foreach ($worksheet->getRowIterator() as $rowIndex => $row) {
                    $rowData = [];
                    $i = 0;

                    foreach ($row->getCellIterator() as $cell) {
                      $rowData[] = $cell->getCalculatedValue(); //$cell->getValue();
                    }
                    
                    $data[] = $rowData;
                }
                $i = 0;
                //desactiver tous les utilisateurs avant de commencer l'import
                foreach ($data as $row) {
                   
                        //find site
                        $name = $row[0];
                        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(['name' => $name]);

                      if ( $site ){
                          
                        //Check if user exists
                        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(
                          ['site_id'=> $site->getId(), 'matricule'=> $row[1]]);

                        if ( !$user ){
                          //create user account
                          //nom, prenom, zone, matricule, email, telephone
                          //site, matricule, nom, prenom, mdp

                          //check if user exists
                          //find site

                          
                         
                          $user = new User();
                          $user->setNom($row[2]);
                          $user->setPrenom($row[3]);
                          $user->setMatricule($row[1]);
                          $user->setEmail($row[1].'@email.ma');
                          $user->setSociete($site->getSociete());
                          $user->setSite($site);

                          //ajouter des zone par société et valider la zone 

                          $user->setStatus('active');
                          $user->setRoles(['ROLE_USER']);
                          $uuid = Uuid::v4();
                          $user->setUid($uuid->toBase32());
                          //$user->setPassword($passwordEncoder->encodePassword($user, trim($row[4])) );

                          // Hash the password
                          $value = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4]);
                          $password =  $value->format('Y-m-d');
                          $hashedPassword = $this->passwordHasher->hashPassword($user, $password);

                          // Set the hashed password in the User entity
                          $user->setPassword($hashedPassword);


                          $entityManager->persist($user);
                          $i++;
                          
                        }
                        else{
                          
                          $user->setNom($row[2]);
                          $user->setPrenom($row[3]);
                          $user->setMatricule($row[1]);
                          $user->setSociete($site->getSociete());
                          $user->setSite($site);
                          //$user->setPassword($passwordEncoder->encodePassword($user, trim($row[4])) );
                          // Hash the password
                          $value = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4]);
                          $password =  $value->format('Y-m-d');

                          $hashedPassword = $this->passwordHasher->hashPassword($user, $password);

                          // Set the hashed password in the User entity
                          $user->setPassword($hashedPassword);

  

                          $entityManager->persist($user);
                        }
                        $entityManager->flush();
                      }   
                }

                
                if ( $i > 0 ) $this->addFlash( 'success', $i . " utilisateur(s) importé(s) avec succès");

                // Process the data (e.g., save it to the database or display it)
                // For this example, we will just output the data to check
                return $this->redirectToRoute('users');
                return $this->render('admin/user/result.html.twig', [
                    'data' => $data,
                    'site' => $site
                ]);
            }
        }

        return $this->render('admin/user/import.html.twig', [
            'form' => $form->createView(),
        ]);
    }



      /**
   * @Route(methods={"GET"}, path="/admin/users/export", name="users.export")
   */
  public function export(Request $request, UserInterface $user, TranslatorInterface $translator, Table $table)
  {
    $format = $request->get('format', 'xlsx');
    $query = $this->getTable($request, $user, $table, true);
    $filename = $translator->trans("Liste des utilisateurs %date%", ['date' => date('d-m-Y Hi')]);

    return $table->export($query, $filename, $format);
  }

}
