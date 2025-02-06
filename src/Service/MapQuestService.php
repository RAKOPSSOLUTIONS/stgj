<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class MapQuestService
{
    private string $apiKey;
    private HttpClientInterface $client;
    private string $baseUrl = 'http://www.mapquestapi.com/directions/v2';

    public function __construct(HttpClientInterface $client, string $apiKey)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }

    public function getSortedPickups(array $locations, bool $fixedDestination): array
    {
        if (count($locations) < 2) {
            throw new \InvalidArgumentException('At least 2 locations are required');
        }

        $response = $this->client->request('GET', $this->baseUrl . '/optimizedroute', [
            'query' => [
                'key' => $this->apiKey,
                'json' => json_encode([
                    'locations' => array_map(fn($l) => ['latLng' => ['lat' => $l['lat'], 'lng' => $l['lng']]], $locations),
                    'options' => [
                        'unit' => 'k',
                        'locale' => 'fr_FR',
                        'routeType' => 'shortest', // fastest
                        'doReverseGeocode' => false,
                        'routeOptimization' => true,
                        'fixedDestination' => $fixedDestination
                    ]
                ])
            ]
        ]);

        $data = $response->toArray();

        if (isset($data['info']['statuscode']) && $data['info']['statuscode'] !== 0) {
            throw new \RuntimeException('MapQuest API Error: ' . ($data['info']['messages'][0] ?? 'Unknown error'));
        }

        return $this->formatResponse($data, $locations);
    }

    private function formatResponse(array $data, array $locations): array
    {
        $route = $data['route'];
        return [
            'total_distance' => $route['distance'], // km
            'total_duration' => $route['time'], // seconds
            'locations' => array_map(function ($index) use ($route, $locations) {
                return [
                    'id' => $locations[$index]['id'],
                    'lat' => $route['locations'][$index]['latLng']['lat'],
                    'lng' => $route['locations'][$index]['latLng']['lng'],
                    'distance' => $route['legs'][$index]['distance'] ?? 0,
                    'duration' => $route['legs'][$index]['time'] ?? 0,
                ];
            }, $route['locationSequence'])
        ];
    }
}
