<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AccessTokenController extends Controller
{
    public function __invoke(Client $client)
    {
        $url = 'https://test.api.amadeus.com/v1/security/oauth2/token';
        try {
            $response = $client->post($url, [
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'form_params' => [
                    'grant_type' => 'client_credentials',
                    'client_id' => env('AMADEUS_CLIENT_ID'),
                    'client_secret' => env('AMADEUS_CLIENT_SECRET')
                ]
            ]);
            $response = $response->getBody();
            $access_token = json_decode($response)->access_token;
            return $response;
        } catch (GuzzleException $exception) {
            dd($exception);
        }
    }
}
