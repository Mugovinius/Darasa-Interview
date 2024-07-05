<?php
namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class GeminiService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => env('GEMINI_API_URL'),
            'headers' => [
                'X-GEMINI-APIKEY' => env('GEMINI_API_KEY'),
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function processQuery($query)
    {
        try {
            $response = $this->client->post('/process-query', [
                'json' => [
                    'query' => $query,
                ],
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            // Handle error
            return [
                'error' => $e->getMessage(),
            ];
        }
    }
}