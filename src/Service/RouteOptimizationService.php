<?php
namespace App\Service;

use App\Entity\Reservation;
use App\Entity\ReservationEntries;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpClient\HttpClient;

class RouteOptimizationService
{
    private $entityManager;
    private $vehicleCapacity;

    public function __construct(
        EntityManagerInterface $entityManager, 
        int $vehicleCapacity = 20
    ) {
        $this->entityManager = $entityManager;
        $this->vehicleCapacity = $vehicleCapacity;
    }

    public function optimizeRoutes(array $bookings)
    {
        // Implement route optimization logic similar to Python version
        $routes = $this->groupBookings($bookings);

        return [
            'total_routes' => count($routes),
            'routes' => array_map(function($route, $index) {
                return [
                    'route_id' => "Route_" . ($index + 1),
                    'passengers' => count($route),
                    'pickup_locations' => array_map(fn($b) => $b->getPickupLocation(), $route),
                    'dropoff_locations' => array_map(fn($b) => $b->getDropoffLocation(), $route)
                ];
            }, $routes, array_keys($routes))
        ];
    }

    private function calculateDistance($location1, $location2)
    {
        // Haversine formula implementation
        $earthRadius = 6371; // km
        $latFrom = deg2rad($location1->getLatitude());
        $lonFrom = deg2rad($location1->getLongitude());
        $latTo = deg2rad($location2->getLatitude());
        $lonTo = deg2rad($location2->getLongitude());

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(
            sqrt(
                pow(sin($latDelta / 2), 2) +
                cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)
            )
        );

        return $angle * $earthRadius;
    }

    private function groupBookings(array $bookings)
    {
        // Sort bookings by proximity (simplified)
        usort($bookings, function($a, $b) {
            return $a->getPickupLocation()->getLatitude() <=> 
                   $b->getPickupLocation()->getLatitude();
        });

        $routes = [];
        $currentRoute = [];

        foreach ($bookings as $booking) {
            // If current route is full, start a new route
            if (count($currentRoute) >= $this->vehicleCapacity) {
                $routes[] = $currentRoute;
                $currentRoute = [];
            }

            // Check time and proximity compatibility
            if (empty($currentRoute) || $this->isCompatibleBooking($currentRoute, $booking)) {
                $currentRoute[] = $booking;
            }
        }

        // Add the last route if not empty
        if (!empty($currentRoute)) {
            $routes[] = $currentRoute;
        }

        return $routes;
    }

    private function isCompatibleBooking(array $route, Booking $newBooking, float $maxTimeDiff = 1.0)
    {
        foreach ($route as $booking) {
            // Time window overlap check
            $timeOverlap = abs($booking->getPickupTimeStart()->getTimestamp() - 
                                $newBooking->getPickupTimeStart()->getTimestamp()) 
                           <= ($maxTimeDiff * 3600); // Convert hours to seconds

            // Geographical proximity check
            $distance = $this->calculateDistance(
                $booking->getPickupLocation(), 
                $newBooking->getPickupLocation()
            );

            // 5 km proximity threshold
            $proximity = $distance <= 5.0;

            if ($timeOverlap && $proximity) {
                return true;
            }
        }

        return false;
    }
}