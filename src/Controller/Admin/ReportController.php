<?php

namespace App\Controller\Admin;

use App\Service\ExcelReportService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Entity\Navette;
use App\Entity\User;
use App\Entity\Reservation;
use App\Entity\ReservationEntries;
use App\Entity\Trajet;
use App\Entity\Pickup;
use App\Entity\Vehicule;
use Psr\Log\LoggerInterface;


class ReportController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }



        /**
     * @Route("/reports/list", name="reports_list")
     */
    public function list()
    {
        return $this->render('reports/list.html.twig');
    }


     /**
   * @Route(path="/generate-report/{reportType}", name="generate_report", methods={"GET"})
   */
    public function generateReport(Request $request, string $reportType, ExcelReportService $excelReportService , LoggerInterface $logger): Response
    {
        try {
        // Get `startAt` and `endAt` from the request
        $startAt = $request->query->get('startAt');
        $endAt = $request->query->get('endAt');

        // Parse the dates if provided
        $startDate = $startAt ? new \DateTime($startAt) : null;
        $endDate = $endAt ? new \DateTime($endAt) : null;



        // Configuration of reports
        $reportConfigs = [
            'report1' => [
                'headers' => ['Site', 'Matricule', 'Nom', 'Prénom','Adresse','GPS(latitude, longitude)','tel','email','Adhésion'],['Site', 'Matricule', 'Nom', 'Prénom','Adresse','GPS(latitude, longitude)','tel','email','Adhésion'],
                'data' => $this->getBaseEffectif($startDate, $endDate),
                'filename' => 'Base effectif.xlsx',
            ],
            'report2' => [
                'headers' => ['Site', 'Matricule', 'Nom', 'Prenom','Adresse','GPS(latitude, longitude)','tel','email','Adhésion'],
               'data' => $this->getBaseAdherents($startDate, $endDate), 
                'filename' => 'Base des adhérents.xlsx',
            ],
            'report3' => [

                'headers' => ['Site', 'Matricule', 'Nom', 'Prenom','Adresse','GPS(latitude, longitude)', 'Tel', 'Email','Date'],
                'data' => $this->getReportHistoriqueInscrits($startDate, $endDate),
                'filename' => 'Historique des inscrits.xlsx',
            ],
            'report4' => [

                'headers' => ['Site', 'Matricule', 'Nom', 'Prenom','Adresse','GPS(latitude, longitude)', 'Tel', 'Email','Date'],
                'data' => $this->getReportHistoriqueDeinscrits($startDate, $endDate),
                'filename' => 'Historique des deinscrits.xlsx',
            ],

            'report5' => [

                'headers' => ['Site', 'Matricule', 'Nom et prenom', 'Trajet','Point (Pickup)','Date','Entee/sortie','Heure'],
                  'data' => $this->getReportPlanningJournalier($startDate, $endDate),
                'filename' => 'planning_journalier.xlsx',
            ],

            'report6' => [

                									                                            					 


                'headers' => ['Date', 'ID Circuit', 'Site', 'Matricule','Nom ','Prenom ','Zone ', 'Point d\'arrêt', 'Type (Entrée/Sortie) ', 'Horaire','Horaire de passage','Véhicule','Chauffeur','Tél','Type navette (ETAT)'],
                'data' => $this->getReportPlanningJournalierReel($startDate, $endDate),
                'filename' => 'planning_journalier_reel.xlsx',
            ],

            'report7' => [

                'headers' => ['Date Navette', 'Heure Navette', '2', '7','14','17','24', '27', 'Type Navette'],
                'data' => $this->getPointageNavettesValidées($startDate, $endDate),
                'filename' => 'Pointage des navettes validées.xlsx',
            ],

            'report8' => [

                'headers' => ['Date Navette', 'Heure Navette', '2', '7','14','17','24', '27', 'Type Navette'],
                'data' => $this->getPointageNavettesAnnulées($startDate, $endDate),
                'filename' => 'Pointage des navettes annulées.xlsx',
            ],

            'report9' => [

                'headers' => ['Site', 'Entrée', 'Sortie'],
                'data' => $this->getTranchesHorairesActives($startDate, $endDate),
                'filename' => 'Tranches horaires actives.xlsx',
            ],

            'report10' => [

                'headers' => ['ID', 'Trajet', 'Point d\'arrêt', 'GPS'],
                'data' => $this->getZonesEtPointsAarrêtActives($startDate, $endDate),
                'filename' => 'Zones et points d\'arréts actives .xlsx',
            ],

            'report11' => [ 
                'headers' => ['Date', 'Type (Entrée/Sortie)', 'Horaire', 'Circuit ID','Zones (Trajet)','Durée','KM','Passagers','Véhicule', 'Cap Net Réelle', 'Taux d\'occupation réel %', 'Coût','Type navette (ETAT)'],
                'data' => $this->getPlaningCircuitsJournalier($startDate, $endDate),
                'filename' => 'Planning des circuits journaliers .xlsx',
            ],
     
            
        ];

        if (!isset($reportConfigs[$reportType])) {
            throw $this->createNotFoundException('Type de rapport introuvable.');
        }

        $config = $reportConfigs[$reportType];


            // Check if it's a preview request
            if ($request->query->get('preview')) {
                return $this->json([
                    'headers' => $config['headers'],
                    'rows' => $config['data'],
                ], 200, [], [
                    'groups' => ['report'], // Apply the serialization group
                ]);
            }

        return $excelReportService->createExcel($config['headers'], $config['data'], $config['filename']);
    } catch (\Exception $e) {
        // Log the error using the injected logger
        $logger->error('Error generating report: ' . $e->getMessage());

        // Return a detailed error response
        return $this->json([
            'error' => 'An error occurred while generating the report.',
            'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
        ], 500);
    }
    }

  
    

    
    //ok v2
    #[Route('/report', name: 'get_detailed_report')]
    public function getPointageNavettesValidées(?\DateTime $startDate = null, ?\DateTime $endDate = null): array
    {
        // Retrieve the Navette repository
        $navetteRepository = $this->entityManager->getRepository(Navette::class);
    
        // Build the query to fetch navette data based on the date range filter, status = 'validée', and other criteria
        $queryBuilder = $navetteRepository->createQueryBuilder('n')
            ->addSelect('n') // Include Navette in the result
            ->where('n.date_navette BETWEEN :startDate AND :endDate')
            ->andWhere('n.status = :status')  // Ensure status is 'annulée'
            ->setParameter('startDate', $startDate ? $startDate->format('Y-m-d') : '1970-01-01')
            ->setParameter('endDate', $endDate ? $endDate->format('Y-m-d') : '2099-12-31')
            ->setParameter('status', 'validée') // Add condition for annulée status
            ->orderBy('n.date_navette', 'DESC'); // Order results by date_navette
        // Execute the query
        $navettes = $queryBuilder->getQuery()->getResult();
    
        // Define custom hour ranges for Entrée and Sortie
        $hoursEntrée = [6, 7, 8, 9, 10, 11, 12, 13, 15, 17, 18, 19, 20, 22, 23];
        $hoursSortie = [1, 2, 4, 7, 8, 12, 13, 15, 16, 17, 18, 19, 20, 21, 22, 23, 23.9833]; // 23:59 is represented as 23.9833
    
        // Remove duplicates from $hoursSortie
        $hoursSortie = array_unique($hoursSortie);
    
        // Prepare the data for the report
        $data = [];
        $timeRanges = [
            '2' => [0, 2],
            '7' => [2, 7],
            '14' => [7, 14],
            '17' => [14, 17],
            '24' => [17, 24],
            '27' => [24, 27],
        ];
    
        // Initialize an array to group results by date and direction
        foreach ($navettes as $navette) {
            $dateNavette = $navette->getDateNavette();
            $direction = $navette->getDirection();
    
            // Determine which hours to use based on the direction
            $hours = ($direction === 'Entrée') ? $hoursEntrée : $hoursSortie;
    
            // Loop through the custom hours for each navette
            foreach ($hours as $heureNavette) {
                // Handle the special case for 23:59 (23.9833)
                if ($heureNavette == 23.9833) {
                    $formattedHour = '23:59';
                } else {
                    // Format hour as HH:mm (e.g., 06:00, 07:00, ...)
                    $formattedHour = str_pad((int)$heureNavette, 2, '0', STR_PAD_LEFT) . ':00';
                }
    
                // Create a unique key for the row based on date, hour, and direction
                $rowKey = $dateNavette->format('Y-m-d') . '_' . $formattedHour . '_' . $direction;
    
                // Check if the row already exists in the data array
                if (!isset($data[$rowKey])) {
                    // Create the row for the report with initial values
                    $row = [
                        'date navette' => $dateNavette ? $dateNavette->format('Y-m-d') : 'N/A',
                        'heure navette' => $formattedHour,
                        '2' => 0,
                        '7' => 0,
                        '14' => 0,
                        '17' => 0,
                        '24' => 0,
                        '27' => 0,
                        'type navette' => ($direction === 'Entrée') ? 'Entrée' : ($direction === 'Sortie' ? 'Sortie' : 'Autre'),
                    ];
    
                    // Determine which time range this hour fits into and update the corresponding range counter
                    foreach ($timeRanges as $rangeLabel => [$startHour, $endHour]) {
                        if ($heureNavette >= $startHour && $heureNavette < $endHour) {
                            $row[$rangeLabel] = 1; // Set the value for this time range
                        }
                    }
    
                    // Add the row to the data array using the unique key
                    $data[$rowKey] = $row;
                }
            }
        }
    
        // Convert the associative array back to a indexed array
        $data = array_values($data);
    
        // Order the results by date_navette, type_navette, and heure_navette
        usort($data, function ($a, $b) {
            // Compare by date_navette, then by type_navette, and finally by heure_navette
            return strcmp($a['date navette'], $b['date navette']) 
                ?: strcmp($a['type navette'], $b['type navette']) 
                ?: strcmp($a['heure navette'], $b['heure navette']);
        });
    
        return $data; // Return the prepared report data
    }




    // ok v2
    #[Route('/report', name: 'get_detailed_report')]
    public function getPointageNavettesAnnulées(?\DateTime $startDate = null, ?\DateTime $endDate = null): array
    {
        // Retrieve the Navette repository
        $navetteRepository = $this->entityManager->getRepository(Navette::class);
    
        // Build the query to fetch navette data based on the date range filter, status = 'validée', and other criteria
        $queryBuilder = $navetteRepository->createQueryBuilder('n')
            ->addSelect('n') // Include Navette in the result
            ->where('n.date_navette BETWEEN :startDate AND :endDate')
            ->andWhere('n.status = :status')  // Ensure status is 'annulée'
            ->setParameter('startDate', $startDate ? $startDate->format('Y-m-d') : '1970-01-01')
            ->setParameter('endDate', $endDate ? $endDate->format('Y-m-d') : '2099-12-31')
            ->setParameter('status', 'annulée');  // Add condition for annulée status
    
        // Execute the query
        $navettes = $queryBuilder->getQuery()->getResult();
    
        // Define custom hour ranges for Entrée and Sortie
        $hoursEntrée = [6, 7, 8, 9, 10, 11, 12, 13, 15, 17, 18, 19, 20, 22, 23];
        $hoursSortie = [1, 2, 4, 7, 8, 12, 13, 15, 16, 17, 18, 19, 20, 21, 22, 23, 23.9833]; // 23:59 is represented as 23.9833
    
        // Remove duplicates from $hoursSortie
        $hoursSortie = array_unique($hoursSortie);
    
        // Prepare the data for the report
        $data = [];
        $timeRanges = [
            '2' => [0, 2],
            '7' => [2, 7],
            '14' => [7, 14],
            '17' => [14, 17],
            '24' => [17, 24],
            '27' => [24, 27],
        ];
    
        // Initialize an array to group results by date and direction
        foreach ($navettes as $navette) {
            $dateNavette = $navette->getDateNavette();
            $direction = $navette->getDirection();
    
            // Determine which hours to use based on the direction
            $hours = ($direction === 'Entrée') ? $hoursEntrée : $hoursSortie;
    
            // Loop through the custom hours for each navette
            foreach ($hours as $heureNavette) {
                // Handle the special case for 23:59 (23.9833)
                if ($heureNavette == 23.9833) {
                    $formattedHour = '23:59';
                } else {
                    // Format hour as HH:mm (e.g., 06:00, 07:00, ...)
                    $formattedHour = str_pad((int)$heureNavette, 2, '0', STR_PAD_LEFT) . ':00';
                }
    
                // Create a unique key for the row based on date, hour, and direction
                $rowKey = $dateNavette->format('Y-m-d') . '_' . $formattedHour . '_' . $direction;
    
                // Check if the row already exists in the data array
                if (!isset($data[$rowKey])) {
                    // Create the row for the report with initial values
                    $row = [
                        'date navette' => $dateNavette ? $dateNavette->format('Y-m-d') : 'N/A',
                        'heure navette' => $formattedHour,
                        '2' => 0,
                        '7' => 0,
                        '14' => 0,
                        '17' => 0,
                        '24' => 0,
                        '27' => 0,
                        'type navette' => ($direction === 'Entrée') ? 'Entrée' : ($direction === 'Sortie' ? 'Sortie' : 'Autre'),
                    ];
    
                    // Determine which time range this hour fits into and update the corresponding range counter
                    foreach ($timeRanges as $rangeLabel => [$startHour, $endHour]) {
                        if ($heureNavette >= $startHour && $heureNavette < $endHour) {
                            $row[$rangeLabel] = 1; // Set the value for this time range
                        }
                    }
    
                    // Add the row to the data array using the unique key
                    $data[$rowKey] = $row;
                }
            }
        }
    
        // Convert the associative array back to a indexed array
        $data = array_values($data);
    
        // Order the results by date_navette, type_navette, and heure_navette
        usort($data, function ($a, $b) {
            // Compare by date_navette, then by type_navette, and finally by heure_navette
            return strcmp($a['date navette'], $b['date navette']) 
                ?: strcmp($a['type navette'], $b['type navette']) 
                ?: strcmp($a['heure navette'], $b['heure navette']);
        });
    
        return $data; // Return the prepared report data
    }


    //ok v2
    #[Route('/report', name: 'get_detailed_report')]
    public function getPlaningCircuitsJournalier(?\DateTime $startDate = null, ?\DateTime $endDate = null): array
    {
        // Retrieve the ReservationEntries repository
        $reservationEntriesRepository = $this->entityManager->getRepository(ReservationEntries::class);

        // Build the query to join relevant tables
        $queryBuilder = $reservationEntriesRepository->createQueryBuilder('re')
            ->leftJoin('re.navette', 'n') // Join Navette from ReservationEntries
            ->leftJoin('n.trajet', 't') // Join Trajet from Navette
            ->leftJoin('n.vehicule', 'v') // Join Vehicule from Navette
            ->leftJoin('re.reservation', 'r') // Join Reservation from ReservationEntries
            ->addSelect('n', 't', 'v', 'r') // Include Navette, Trajet, Vehicule, and Reservation in the result
            ->orderBy('n.date_navette', 'DESC');
        // Apply date filters for ReservationEntries' reservation_date
        if ($startDate) {
            $queryBuilder->andWhere('r.begin_on >= :startDate')
                        ->setParameter('startDate', $startDate->format('Y-m-d'));
        }
        if ($endDate) {
            $queryBuilder->andWhere('r.end_on <= :endDate')
                        ->setParameter('endDate', $endDate->format('Y-m-d'));
        }

        // Filter for 'Validée' and 'Annulée' navette status
        $queryBuilder->andWhere('n.status IN (:validStatuses)')
                    ->setParameter('validStatuses', ['Validée', 'Annulée']);

        // Execute the query
        $reservationEntries = $queryBuilder->getQuery()->getResult();
        
        // Prepare the data for the report
        $data = [];
        foreach ($reservationEntries as $entry) {
            $navette = $entry->getNavette();
            // Fetch related Navette
            $trajet = $navette ? $navette->getTrajet() : null; // Fetch Trajet from Navette
            $vehicule = $navette ? $navette->getVehicule() : null; // Fetch Vehicule from Navette

            $row = [
                'date' => $navette && $navette->getDateNavette() 
                    ? $navette->getDateNavette()->format('Y-m-d') 
                    : '',
                'type (entrée/sortie)' => $navette ? $navette->getDirection() : '',
                'horaire' => $navette && $navette->getHeureNavette() 
                    ? $navette->getHeureNavette() 
                    : '',
                'circuit id' => $trajet ? $trajet->getId() : '',
                'zones (trajet)' => $trajet ? $trajet->getName() : '',
                'durée' => $navette ? $navette->getDuree() : '',
                'km' => $navette ? $navette->getDistance() : '',
                'passagers' => $navette ? count($navette->getEntries()) : '',
                'véhicule' => $vehicule ? $vehicule->getImmatriculation() : '',
                'capacité navette réelle' => $vehicule ? $vehicule->getSeats() : '',
                'taux d\'occupation réel %' => $vehicule && $navette ? (count($navette->getEntries()) / $vehicule->getSeats()) * 100 : '',
                'coût' => $navette ? $navette->getTarif() : '',
                'type navette (etat)' => $navette ? $navette->getStatus() : '',
            ];

            // Check if the row contains any non-'N/A' values
            if (array_filter($row, fn($value) => $value !== 'N/A')) {
                $data[] = $row; // Add the row to the final data if it has at least one non-'N/A' value
            }
        }

        return $data; // Return the prepared report data
    }





    //OK
    #[Route('/users/gps_report', name: 'get_zones_report')]
    public function getZonesEtPointsAarrêtActives(?\DateTime $startDate = null, ?\DateTime $endDate = null): array

    {
        // Retrieve the Pickup repository
        $pickupRepository = $this->entityManager->getRepository(Pickup::class);

        // Create the query to join Pickup with Trajet
        $queryBuilder = $pickupRepository->createQueryBuilder('p')
            ->leftJoin('p.trajet', 't') // Join Trajet from Pickup
            ->addSelect('t') // Include Trajet in the result
            ->orderBy('t.name', 'ASC');
        // Add conditions for date range (if provided)
        if ($startDate) {
            $queryBuilder->andWhere('p.heure >= :startDate')
                ->setParameter('startDate', $startDate->format('Y-m-d H:i:s'));
        }
        if ($endDate) {
            $queryBuilder->andWhere('p.heure <= :endDate')
                ->setParameter('endDate', $endDate->format('Y-m-d H:i:s'));
        }

        // Execute the query
        $pickups = $queryBuilder->getQuery()->getResult();

        // Prepare the data
        $data = [];
        $trajetIdMapping = []; // This will store unique trajet values and their corresponding IDs
        $currentId = 1; // ID for the trajets

        foreach ($pickups as $pickup) {
            $trajet = $pickup->getTrajet(); // Fetch related Trajet
            $trajetName = $trajet ? $trajet->getName() : null; // Get Trajet name

            // Check if this trajet already has an ID
            if ($trajetName && !isset($trajetIdMapping[$trajetName])) {
                $trajetIdMapping[$trajetName] = $currentId; // Assign a new ID for this unique trajet
                $currentId++; // Increment the ID for the next unique trajet
            }

            // Prepare the row with values
            $row = [
                'id' => $trajetName ? $trajetIdMapping[$trajetName] : null, // Use the assigned ID for the trajet
                'trajet' => $trajetName, // The Trajet
                'point d\'arrêt' => $pickup ? $pickup->getName() : null, // Pickup name
                'gps' => $pickup ? $pickup->getLatitude(). ',' .$pickup->getLongitude() : null, // Pickup latitude
                
            ];

            // Check if any of the values are empty (null or empty string)
            if (!empty($row['trajet']) && !empty($row['point d\'arrêt']) && !empty($row['gps']) ) {
                $data[] = $row; // Add the row if all values are non-empty
            }
        }

        return $data; // Return the prepared report data
    }
    
    

   #[Route('/reservation-hours', name: 'get_reservation_hours')]
public function getTranchesHorairesActives(?\DateTime $startDate = null, ?\DateTime $endDate = null): array
{
    // Retrieve the repository for the Reservation entity
    $repository = $this->entityManager->getRepository(Reservation::class);

    // Build the query with optional filters on "reservation_date"
    $queryBuilder = $repository->createQueryBuilder('r')
        ->join('r.user', 'u') // Relationship between reservation and user
        ->addSelect('u'); // Also load user data

    if ($startDate) {
        $queryBuilder->andWhere('r.reservation_date >= :startDate')
                     ->setParameter('startDate', $startDate);
    }

    if ($endDate) {
        $queryBuilder->andWhere('r.reservation_date <= :endDate')
                     ->setParameter('endDate', $endDate);
    }

    $reservations = $queryBuilder->getQuery()->getResult();

    // Prepare the data for the report
    $data = [];
    $uniqueEntries = [];
    $uniqueExits = [];

    foreach ($reservations as $reservation) {
        $user = $reservation->getUser();
        $usersite = $user->getSite();
        $site = $usersite ? $usersite->getName() : "";
        $heureEntree = $reservation->getShiftEntree();
        $heureSortie = $reservation->getShiftSortie();

        // Store unique shift_entree per site
        if ($heureEntree !== null) {
            $heureEntreeFormatted = sprintf('%02d:00', $heureEntree);
            $uniqueKey = $site . '-Entree-' . $heureEntreeFormatted;
            if (!isset($uniqueEntries[$uniqueKey])) {
                $data[] = [
                    'site' => $site,
                    'entrée' => $heureEntreeFormatted,
                    'sortie' => null,
                ];
                $uniqueEntries[$uniqueKey] = true;
            }
        }

        // Store unique shift_sortie per site
        if ($heureSortie !== null) {
            $heureSortieFormatted = sprintf('%02d:00', $heureSortie);
            $uniqueKey = $site . '-Sortie-' . $heureSortieFormatted;
            if (!isset($uniqueExits[$uniqueKey])) {
                $data[] = [
                    'site' => $site,
                    'entrée' => null,
                    'sortie' => $heureSortieFormatted,
                ];
                $uniqueExits[$uniqueKey] = true;
            }
        }
    }

    // **Sorting Function**
    usort($data, function ($a, $b) {
        // First, compare by Site name (Alphabetically)
        $siteComparison = strcmp($a['site'], $b['site']);
        if ($siteComparison !== 0) {
            return $siteComparison;
        }

        // Convert hours to numeric values for sorting
        $heureEntreeA = isset($a['entrée']) ? intval(substr($a['entrée'], 0, 2)) : null;
        $heureEntreeB = isset($b['entrée']) ? intval(substr($b['entrée'], 0, 2)) : null;
        $heureSortieA = isset($a['sortie']) ? intval(substr($a['sortie'], 0, 2)) : null;
        $heureSortieB = isset($b['sortie']) ? intval(substr($b['sortie'], 0, 2)) : null;

        // Sort by `Heure_entrée` first
        if ($heureEntreeA !== null && $heureEntreeB !== null) {
            return $heureEntreeA - $heureEntreeB;
        }

        // If only one has `Heure_entrée`, it should come first
        if ($heureEntreeA !== null) return -1;
        if ($heureEntreeB !== null) return 1;

        // Sort by `Heure_sortie` next
        return $heureSortieA - $heureSortieB;
    });

    return $data;
}


    // a verifier
    #[Route('/users', name: 'get_planning_journalier_reservation')]
    public function getReportPlanningJournalierReel(?\DateTime $startDate = null, ?\DateTime $endDate = null): array
    {
        // Retrieve the ReservationEntries repository
        $reservationEntriesRepository = $this->entityManager->getRepository(ReservationEntries::class);
    
        // Build the query to join Reservation and User
        $queryBuilder = $reservationEntriesRepository->createQueryBuilder('re')
            ->leftJoin('re.reservation', 'r') // Join Reservation from ReservationEntries
            ->leftJoin('r.user', 'u') // Join User from Reservation
            ->leftJoin('re.navette', 'n') // Join Navette from ReservationEntries
            ->leftJoin('n.trajet', 't') // Join Trajet from Navette
            ->leftJoin('n.vehicule', 'v') // Join Vehicule from Navette
            ->addSelect('r', 'u', 'n', 'v', 't') // Include Reservation, User, Navette, and Vehicule in the result
            ->andWhere('re.status IN (:statuses)') // Add condition for status
            ->setParameter('statuses', ['validée', 'en attente']) // Set the statuses to filter by
            ->orderBy('re.reservation_date', 'DESC'); // Order by reservation_date in ascending order

    

        // Apply date filters for ReservationEntries' reservation_date
        if ($startDate) {
            $queryBuilder->andWhere('r.begin_on >= :startDate')
                         ->setParameter('startDate', $startDate->format('Y-m-d'));
        }
        if ($endDate) {
            $queryBuilder->andWhere('r.end_on <= :endDate')
                         ->setParameter('endDate', $endDate->format('Y-m-d'));
        }
    
        // Execute the query
        $reservationEntries = $queryBuilder->getQuery()->getResult();
    
        // Prepare the data for the report
        $data = [];
        foreach ($reservationEntries as $entry) {

        $navette = $entry->getNavette(); // Fetch related Navette
            // Fetch related Navette
            $trajet = $navette ? $navette->getTrajet() : null; // Fetch Trajet from Navette
            $reservation = $entry->getReservation(); // Fetch related Reservation
            
            $user = $reservation ? $reservation->getUser() : null; // Fetch User from Reservation
            $vehicule = $navette ? $navette->getVehicule() : null; // Fetch Vehicule from Navette
            $site = $user->getSite();
            $trj = $entry ? $entry->getTrajet() : null ;
            $chofeur = $vehicule ? $vehicule->getUser() : '';
            
            // Add each entry's data to the report
            $row = [
                'date' => $entry ? $entry->getReservationDate()->format('Y-m-d') : '',
                'id circuit' =>  $navette ? $navette->getId(): '',
                'site' => $site ? $site->getName() : '',
                'matricule' => $user ? $user->getMatricule() : '',
                'nom ' => $user ? $user->getNom() : '',
                'prenom ' => $user ? $user->getPrenom() : '',
                'zone ' => $trj ? $trj->getName() : '' ,
                'point d\'arrêt' => $entry ? $entry->getPickupLocation() : '',
                'type (entrée/sortie) ' => $entry ? $entry->getDirection() : '',
                'horaire' => $entry ? $entry->getReservationHeure() : '',
                'horaire de passage' => $entry->getHeurePassage() ? $entry->getHeurePassage()->format('H:i') : '',
                'véhicule' => $vehicule ? $vehicule->getImmatriculation().' '.$vehicule->getMarque() : '',
                'chauffeur' => $chofeur ? $chofeur->getNom().' '.$chofeur->getPrenom() : '',
                'tél' => $user ? $user->getTelephone() : '',
                'type navette (etat)' => $entry ? $entry->getStatus() : '',






            ];
    
            // Check if the row contains any non-'N/A' values
            if (array_filter($row, fn($value) => $value !== 'N/A')) {
                $data[] = $row; // Add the row to the final data if it has at least one non-'N/A' value
            }
        }
    
        return $data; // Return the prepared report data
    }
    
    



    #[Route('/users', name: 'get_planning_journalier_reservation')]
    public function getReportPlanningJournalier(?\DateTime $startDate = null, ?\DateTime $endDate = null): array
{
        // Retrieve the ReservationEntries repository
        $reservationEntriesRepository = $this->entityManager->getRepository(ReservationEntries::class);
    
        // Build the query to join Reservation, User, Navette, Trajet, and Vehicule
        $queryBuilder = $reservationEntriesRepository->createQueryBuilder('re')
        ->leftJoin('re.reservation', 'r') // Join Reservation from ReservationEntries
        ->leftJoin('r.user', 'u') // Join User from Reservation
        ->leftJoin('re.navette', 'n') // Join Navette from ReservationEntries
        ->leftJoin('n.trajet', 't') // Join Trajet from Navette
        ->leftJoin('n.vehicule', 'v') // Join Vehicule from Navette
        ->addSelect('r', 'u', 'n', 'v', 't') // Include Reservation, User, Navette, and Vehicule in the result
        ->orderBy('re.reservation_date', 'DESC'); // Order by reservation_date in ascending order

    
              // Apply date filters for ReservationEntries' reservation_date
              if ($startDate) {
                $queryBuilder->andWhere('r.begin_on >= :startDate')
                             ->setParameter('startDate', $startDate->format('Y-m-d'));
            }
            if ($endDate) {
                $queryBuilder->andWhere('r.end_on <= :endDate')
                             ->setParameter('endDate', $endDate->format('Y-m-d'));
            }
        
            // Execute the query
            $reservationEntries = $queryBuilder->getQuery()->getResult();
        
            // Prepare the data for the report
            $data = [];
            foreach ($reservationEntries as $entry) {
                
            $navette = $entry->getNavette(); // Fetch related Navette
                // Fetch related Navette
                $trajet = $navette ? $navette->getTrajet() : null; // Fetch Trajet from Navette
                $reservation = $entry->getReservation(); // Fetch related Reservation
                
                $user = $reservation ? $reservation->getUser() : null; // Fetch User from Reservation
                $vehicule = $navette ? $navette->getVehicule() : null; // Fetch Vehicule from Navette
                $site = $user->getSite();
                $trj = $entry ? $entry->getTrajet() : null ;
            // Add each entry's data to the report
            $data[] = [
                'site' => $site ? $site->getName() : '',
                'matricule' => $user ? $user->getMatricule() : 'N/A',
                'nom et prenom' => $user ? $user->getNom() .' '.$user->getPrenom() : 'N/A',
                'trajet' => $trj ? $trj->getName() : '',
                'point (pickup)' => $entry ? $entry->getPickupLocation() : 'N/A',
                'date' => $entry ? $entry->getReservationDate()->format('Y-m-d') : 'N/A',
                'entee/sortie' => $entry ? $entry->getDirection() : 'N/A',
                'heure' => $entry ? $entry->getReservationHeure() : 'N/A',



            ];
        }
    
        return $data; // Return the prepared report data
    }

    //ok
    #[Route('/users', name: 'get_inscrit_users')]
    public function getReportHistoriqueInscrits(?\DateTime $startDate = null, ?\DateTime $endDate = null): array
  {
        $repository = $this->entityManager->getRepository(User::class);
        $queryBuilder = $repository->createQueryBuilder('u');
    
        $queryBuilder->andWhere('u.adhesion = :adhesion')
            ->setParameter('adhesion', 1);
    
        if ($startDate) {
            $queryBuilder->andWhere('DATE(u.date_adhesion) >= :startDate')
                ->setParameter('startDate', $startDate);
        }
    
        if ($endDate) {
            $queryBuilder->andWhere('DATE(u.date_adhesion) <= :endDate')
                ->setParameter('endDate', $endDate);
        }
    
        $queryBuilder->orderBy('u.date_adhesion', 'DESC');
    
        $users = $queryBuilder->getQuery()->getResult();
    
        $data = array_map(function ($user) {
            $site = $user->getSite();
            return [
                'site' => $site ? $site->getName() : '',
                'matricule' => $user->getMatricule(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'adresse' => $user->getAdresse(),
                'gps(latitude, longitude)' => '(' . $user->getLatitude() . ', ' . $user->getLongitude() . ')',
                'tel' => $user->getTelephone(),
                'email' => $user->getEmail(),
                'date' => $user->getDateAdhesion(),
            ];
        }, $users);
    
        return $data;
    }   


    #[Route('/users', name: 'get_deinscrit_users')]
    public function getReportHistoriqueDeinscrits(?\DateTime $startDate = null, ?\DateTime $endDate = null): array
    {
        $repository = $this->entityManager->getRepository(User::class);
        $queryBuilder = $repository->createQueryBuilder('u');
    
        $queryBuilder->andWhere('u.adhesion = :adhesion')
            ->setParameter('adhesion', 0);
    
        if ($startDate) {
            $queryBuilder->andWhere('DATE(u.date_adhesion) >= :startDate')
                ->setParameter('startDate', $startDate);
        }
    
        if ($endDate) {
            $queryBuilder->andWhere('DATE(u.date_adhesion) <= :endDate')
                ->setParameter('endDate', $endDate);
        }
    
        $queryBuilder->orderBy('u.date_adhesion', 'DESC');
    
        $users = $queryBuilder->getQuery()->getResult();
    
        $data = array_map(function ($user) {
            $site = $user->getSite();
            return [
                'site' => $site ? $site->getName() : '',
                'matricule' => $user->getMatricule(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'adresse' => $user->getAdresse(),
                'gps(latitude, longitude)' => '(' . $user->getLatitude() . ', ' . $user->getLongitude() . ')',
                'tel' => $user->getTelephone(),
                'email' => $user->getEmail(),
                'date' => $user->getDateAdhesion(),
            ];
        }, $users);
    
        return $data;
    }


    
    //ok
    private function getBaseEffectif(): array
    {
        $repository = $this->entityManager->getRepository(user::class);
    
        // Build query with optional date filtering on "date_adhesion"
        $queryBuilder = $repository->createQueryBuilder('u');

    
        $users = $queryBuilder->getQuery()->getResult();
    
        // Prepare data for the report
        $data = [];
        
        foreach ($users as $user) {
            $site = $user->getSite();
            $data[] = [

                'site' => $site ? $site->getName() : '',
                'matricule' => $user->getMatricule(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'adresse' => $user->getAdresse(),
                'gps(latitude, longitude)' => '(' . $user->getLatitude() . ', ' . $user->getLongitude() . ')',
                'tel' =>$user->getTelephone(),
                'email' =>$user->getEmail(),
                'adhésion' => $user->getAdhesion() ? 'Oui' : 'Non',
            ];
        }
    
        return $data;
    }

    //ok
    private function getBaseAdherents(): array
    {
        $repository = $this->entityManager->getRepository(user::class);
    
        // Build query with optional date filtering on "date_adhesion"
        $queryBuilder = $repository->createQueryBuilder('u');
            // Add condition for adhesion = 1
            $queryBuilder->andWhere('u.adhesion = :adhesion')
            ->setParameter('adhesion', 1);

    
        $users = $queryBuilder->getQuery()->getResult();
    
        // Prepare data for the report
        $data = [];
        foreach ($users as $user) {
            $site = $user->getSite();
            $data[] = [

                'site' => $site ? $site->getName() : '',
                'matricule' => $user->getMatricule(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'adresse' => $user->getAdresse(),
                'gps(latitude, longitude)' => '(' . $user->getLatitude() . ', ' . $user->getLongitude() . ')',
                'tel' =>$user->getTelephone(),
                'email' =>$user->getEmail(),
                'adhésion' => $user->getAdhesion() ? 'Oui' : 'Non',
            ];
        }
    
        return $data;
    }


   
   
    /**
   * @Route(path="/admin/reporting", name="reporting", methods={"GET"})
   */
    public function reportsList(): Response
    {
        $reports = [
            ['type' => 'report1', 'label' => 'Base de l\'effectif', 'report_category' => 'simple'],
            ['type' => 'report2', 'label' => 'Base des adhérents', 'report_category' => 'simple'],
            ['type' => 'report3', 'label' => 'Historique des inscrits', 'report_category' => 'date_interval'],
            ['type' => 'report4', 'label' => 'Historique des désinscrits', 'report_category' => 'date_interval'],
            ['type' => 'report5', 'label' => 'Planning journalier', 'report_category' => 'date_interval'],
            ['type' => 'report6', 'label' => 'Planning journalier Réel', 'report_category' => 'date_interval'],
            ['type' => 'report7', 'label' => 'Pointage des navettes', 'report_category' => 'date_interval'],
            ['type' => 'report8', 'label' => 'Pointage des navettes annulées', 'report_category' => 'date_interval'],
            ['type' => 'report9', 'label' => 'Tranches horaires actives', 'report_category' => 'simple'],
            ['type' => 'report10', 'label' => 'Zones et points d\’arrêt actives', 'report_category' => 'simple'],
            ['type' => 'report11', 'label' => 'Planning des circuits journalier', 'report_category' => 'date_interval'],
        ];
    


        return $this->render('reports/list.html.twig', [
            'reports' => $reports,
        ]);
    }

    
}

