<?php
    
namespace App\Controller\Admin;

use App\Helpers\Base;
use App\Entity\Reservation;
use App\Entity\ReservationEntries;
use App\Entity\Reclamation;
use App\Entity\Trajet;
use App\Entity\Annonce;
use App\Controller\BaseController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Response;

class ReportingController extends BaseController
{

  /**
   * @Route(path="/admin/reporting1", name="reporting1", methods={"GET"})
   */
  // public function index(UserInterface $user)
  // {
  //   $em = $this->getDoctrine()->getManager();

  //   /*$ReseRepo = $em->getRepository(Media::class);
  //   $compaignRepo = $em->getRepository(Compaign::class);
  //   $linkRepo = $em->getRepository(Link::class);
  //   $languageRepo = $em->getRepository(Language::class);*/
    

  //   return $this->render('admin/reporting/index.html.twig', [
  //     'reservations_count' => 0, //$mediaRepo->getCount($user),
  //     'pointages_count' => 0, //$compaignRepo->getCount($user),
  //     'reclamations_count' => 0, //$linkRepo->getCount($user),
  //     'annonces_count' => 0, //$languageRepo->getCount($user),
  //   ]);
  // }

  /**
   * @Route(path="/admin/reporting/trajets", name="reporting_trajets", methods={"GET"})
   */
  public function trajets(UserInterface $user)
  {
    $em = $this->getDoctrine()->getManager();

    $TrajetRepo = $em->getRepository(Trajet::class);


    /*$qb = $this->getDoctrine()->getRepository(Trajet::class)
      ->createQueryBuilder('t')
      //->select('c.countrycode, COUNT(DISTINCT(m.id)) as count')
      ->join(ReservationEntries::class, 're', 'WITH', 're.trajet_id = t.id')
      ->andWhere('re.reservation_date = :reservation_date')
      ->setParameter('reservation_date', new \DateTime())
      ->andWhere('t.user_id = :user_id')
      ->setParameter('user_id', $user->getId())
      ->orderBy('re.id', 'asc');

    $result = $qb->getQuery()->getResult(); 

    print_r($result);exit;*/

    $trajets = $this->getDoctrine()->getRepository(Trajet::class)->findBy(['user_id' => $user->getId()]);    

    return $this->render('admin/reporting/trajets.html.twig', [
      'trajets' => $trajets,
    ]);
  }

  /**
   * Countries stats
   * @Route(methods={"GET"}, path="/reporting/media-countries", name="reporting.media-countries")
   */
  public function mediaCountries(UserInterface $user, TranslatorInterface $translator)
  {
    $qb = $this->getDoctrine()->getRepository(Media::class)
      ->createQueryBuilder('m')
      ->select('c.countrycode, COUNT(DISTINCT(m.id)) as count')
      ->join(Country::class, 'c', 'WITH', 'm.countryId = c.id')
      ->groupBy('c.id')
      ->orderBy('c.countryname', 'asc');

      //<img src='/img/flags/svg/{$fipscode}.svg' alt='{{$fipscode}}'>

    if (!$this->isGranted('ROLE_ADMIN')) {
      $qb->andWhere('m.user_id = :user_id');
      $qb->setParameter('user_id', $user->getId());
    }
    $result = $qb->getQuery()->getResult(); 
    $result = array_column($result, 'count', 'countrycode');
    $values = array_values($result);
    
    return $this->json(['status' => 'success', 'data' => $values]);
  }

  /**
   * Nombre de visiteurs par direction
   * @Route(methods={"GET"}, path="/reporting/medias-per-country", name="reporting.medias_per_country")
   */
  public function mediasPerCountry(UserInterface $user, TranslatorInterface $translator)
  {
    $qb = $this->getDoctrine()->getRepository(Media::class)
      ->createQueryBuilder('m')
      ->select('c.countryname, c.countrycode, COUNT(DISTINCT(m.id)) as count')
      ->join(Country::class, 'c', 'WITH', 'm.countryId = c.id')
      ->groupBy('c.id')
      ->orderBy('c.countryname', 'asc');

      //<img src='/img/flags/svg/{$fipscode}.svg' alt='{{$fipscode}}'>

    if (!$this->isGranted('ROLE_ADMIN')) {
      $qb->andWhere('m.user_id = :user_id');
      $qb->setParameter('user_id', $user->getId());
    }
    $result = $qb->getQuery()->getResult(); 
    $result = array_column($result, 'count', 'countryname');
    $values = array_values($result);
    $colors = array_map(function() {
      return Base::getRandomColor();
    }, $values);

    $data = [
      'labels' => array_keys($result),
      'datasets' => [
        [
          'data' => $values,
          'backgroundColor' => $colors
        ]
      ]
    ];

    return $this->json([
      'status'  => 'success',
      'data'    => $data,
      'options' => [
        'responsive' => true,
        'maintainAspectRatio' => false,
        'plugins' => [
          'legend' => [
            'position' => 'right'
          ],
          'title' => [
            "display" => true,
            "text" => $translator->trans("Media per country")
          ]
        ]
      ]
    ]);
  }

  /**
   * Nombre de visites par direction
   * @Route(methods={"GET"}, path="/reporting/medias-per-category", name="reporting.medias_per_category")
   */
  public function visitesPerDirection(UserInterface $user, TranslatorInterface $translator)
  {
    $qb = $this->getDoctrine()->getRepository(Media::class)
      ->createQueryBuilder('m')
      ->select('m.category as name, COUNT(m) as count')
      ->groupBy('m.category')
      ->orderBy('m.category', 'asc');

    if (!$this->isGranted('ROLE_ADMIN')) {
      $qb->andWhere('m.user_id = :user_id');
      $qb->setParameter('user_id', $user->getId());
    }
    $result = $qb->getQuery()->getResult();
    $result = array_column($result, 'count', 'name');
    $values = array_values($result);
    $colors = array_map(function() {
      return Base::getRandomColor();
    }, $values);

    $data = [
      'labels' => array_keys($result),
      'datasets' => [
        [
          'data' => $values,
          'backgroundColor' => $colors
        ]
      ]
    ];

    return $this->json([
      'status'  => 'success',
      'data'    => $data,
      'options' => [
        'responsive' => true,
        'maintainAspectRatio' => false,
        'plugins' => [
          'legend' => [
            'position' => 'right'
          ],
          'title' => [
            "display" => true,
            "text" => $translator->trans("Medias per category")
          ]
        ]
      ]
    ]);
  }

  /**
   * Nombre de visites par statut
   * @Route(methods={"GET"}, path="/reporting/links-per-media", name="reporting.links_per_media")
   */
  public function linksPerMedia(UserInterface $user, TranslatorInterface $translator)
  {
    $qb = $this->getDoctrine()->getRepository(Link::class)
      ->createQueryBuilder('l')
      ->select('m.name, COUNT(l.id) as count')
      ->join(Media::class, 'm', 'WITH', 'l.media_id = m.id')
      ->groupBy('m.name');

    if (!$this->isGranted('ROLE_ADMIN')) {
      $qb->andWhere('l.user_id = :user_id');
      $qb->setParameter('user_id', $user->getId());
    }
    $result = $qb->getQuery()->getResult();
    
    $result = array_column($result, 'count', 'name');

    $data = [
      'labels' => array_keys($result),
      'datasets' => [
        [
          'data' => array_values($result),
          'backgroundColor' => ['#ffc107', '#0d6efd', '#0dcaf0', '#198754'],
        ]
      ]
    ];

    return $this->json([
      'status'  => 'success',
      'data'    => $data,
      'options' => [
        'responsive' => true,
        'maintainAspectRatio' => false,
        'plugins' => [
          'legend' => [
            'position' => 'right'
          ],
          'title' => [
            "display" => true,
            "text" => $translator->trans("Links per media")
          ]
        ]
      ]
    ]);
  }

  /**
   * Media per language
   * @Route(methods={"GET"}, path="/reporting/medias-per-language", name="reporting.medias_per_language")
   */
  public function mediasPerLanguage(UserInterface $user, TranslatorInterface $translator)
  {
      $qb = $this->getDoctrine()->getRepository(Media::class)
      ->createQueryBuilder('m')
      ->select('l.name, COUNT(m.id) as count')
      ->join(Language::class, 'l', 'WITH', 'm.languageId = l.id')
      ->groupBy('l.id')
      ->orderBy('l.name', 'asc');


    if (!$this->isGranted('ROLE_ADMIN')) {
      $qb->andWhere('m.user_id = :user_id');
      $qb->setParameter('user_id', $user->getId());
    }
    $result = $qb->getQuery()->getResult(); 
    $result = array_column($result, 'count', 'name');
    $values = array_values($result);
    $colors = array_map(function() {
      return Base::getRandomColor();
    }, $values);

    $data = [
      'labels' => array_keys($result),
      'datasets' => [
        [
          'data' => $values,
          'backgroundColor' => $colors
        ]
      ]
    ];

    return $this->json([
      'status'  => 'success',
      'data'    => $data,
      'options' => [
        'responsive' => true,
        'maintainAspectRatio' => false,
        'plugins' => [
          'legend' => [
            'position' => 'right'
          ],
          'title' => [
            "display" => true,
            "text" => $translator->trans("Medias per language")
          ]
        ]
      ]
    ]);
  }

  /**
   * Nombre de visiteurs par direction
   * @Route(methods={"GET"}, path="/reporting/map", name="reporting.map")
   */
  public function map(UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([]);
  }

}
