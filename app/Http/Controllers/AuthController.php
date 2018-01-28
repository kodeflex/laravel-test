<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class AuthController extends Controller
{
    public function auth(Request $request) {
      $client = new Client([
          'base_uri' => 'http://192.168.10.10',
          'timeout'  => 2.0,
      ]);

      try {
        $response = $client->request('POST', '/oauth/token', [
            'form_params' => [
                'client_id' => $request->client_id,
                'client_secret' => $request->client_secret,
                'grant_type' => 'password',
                'scope' => '*',
                'username' => $request->username,
                'password' => $request->password

            ]
        ]);
        return $response;
      } catch (RequestException $e) {
          if ($e->hasResponse()) {
              return Psr7\str($e->getResponse());
          }
      }

    }
}