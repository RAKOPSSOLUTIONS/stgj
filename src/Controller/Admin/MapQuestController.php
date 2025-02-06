<?php

namespace App\Controller\Admin;

use App\Service\MapQuestService;
use App\Controller\BaseController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class MapQuestController extends BaseController
{
  /**
   * @Route("/test-mapquest", name="admin_test_mapquest")
   */
  public function calculateRoute(MapQuestService $mapQuestService): JsonResponse
  {
    $navette_direction = 'Entrée';

    $locations = [
      ['id' => 4, 'lat' => 34.0013725, 'lng' => -6.8501119], // Japonezà Sushis-Thaï & Woks
      ['id' => 1, 'lat' => 33.9952424, 'lng' => -6.8479404], // McDonald's
      ['id' => 2, 'lat' => 33.9975624, 'lng' => -6.8488312], // New Camp Language Center
      ['id' => 3, 'lat' => 34.0007872, 'lng' => -6.8499997], // Badr Mosque
    ];

    if ($navette_direction == 'Entrée') {
      $fixedDestination = true;
      $destination = ['id' => 0, 'lat' => 33.9998213, 'lng' => -6.8577718]; // Gare RABAT AGDAL
      $locations = array_merge($locations, [$destination]);
    } else {
      $fixedDestination = false;
    }

    try {
      $pickups = $mapQuestService->getSortedPickups($locations, $fixedDestination);
      return $this->json($pickups);
    } catch (\Exception $e) {
      return $this->json(['error' => $e->getMessage()], 400);
    }
  }
}
