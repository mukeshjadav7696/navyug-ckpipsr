<?php

namespace App\Helpers;

use Exception;
use Illuminate\Support\Facades\Http;


class APIHelper
{
  /**
   * Get data from api servier via http client
   *
   * @param string $endpoint
   * @param array $queryParameters
   * @return Collection
   */
  public static function getData($endpoint, $queryParameters = null)
  {
    //prepare endpoint
    $apiServer = config('institute.api.server');
    if (!$apiServer) {
      throw new Exception("API Server URL not found", 1);
    }
    $url = $apiServer . $endpoint;

    //get token
    $apiToken = config('institute.api.token');
    if (!$apiToken) {
      throw new Exception("API Token not found", 1);
    }

    try {
      $response = Http::acceptJson()
        ->withToken($apiToken)
        ->get($url, $queryParameters);
      if ($response->failed()) {
        throw new Exception($response->body(), 1);
      }

      //convert array to json
      $data = json_decode(json_encode($response->json()));
      return collect($data);
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
