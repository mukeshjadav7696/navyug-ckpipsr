<?php

namespace App\Helpers;

use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;


class APIHelper
{
  private $server;
  private $token;

  /**
   * Constructor
   * Get server and token detail from the configuration
   */
  public function __construct()
  {

    //prepare endpoint
    $apiServer = config('institute.api.server');
    if (!$apiServer) {
      throw new Exception("API Server URL not found", 1);
    }
    //get token
    $apiToken = config('institute.api.token');
    if (!$apiToken) {
      throw new Exception("API Token not found", 1);
    }

    $this->server = $apiServer;
    $this->token = $apiToken;
  }

  /**
   * Get live data from api servier via http client
   *
   * @param string $endpoint
   * @param array $queryParameters
   * @return Collection
   */
  public static function getLiveCollection($endpoint, $queryParameters = null)
  {
    try {
      //create new instance
      $api = new APIHelper();

      $response = Http::acceptJson()
        ->withToken($api->token)
        ->get($api->server . $endpoint, $queryParameters);
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

  /**
   * Get live data from api servier via http client
   *
   * @param string $endpoint
   * @param array $queryParameters
   * @return object
   */
  public static function getLiveRecord($endpoint, $queryParameters = null)
  {
    try {
      //create new instance
      $api = new APIHelper();

      $response = Http::acceptJson()
        ->withToken($api->token)
        ->get($api->server . $endpoint, $queryParameters);
      if ($response->failed()) {
        throw new Exception($response->body(), 1);
      }

      //convert array to json
      return (object) $response->json();
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  /**
   * Get cached data and if not avaialble then retrieve it via api request
   *
   * @param string $endpoint
   * @param array $queryParameters
   * @return Collection
   */
  public static function getCachedData($endpoint, $queryParameters = null)
  {
    //Look into cache first
    if (Cache::has($endpoint)) {
      $data = Cache::get($endpoint);
    } else {
      //Fetch data from server
      try {
        //create new instance
        $api = new APIHelper();

        $response = Http::acceptJson()
          ->withToken($api->token)
          ->get($api->server . $endpoint, $queryParameters);
        if ($response->failed()) {
          throw new Exception($response->body(), 1);
        }

        //convert array to json
        $data = collect($response->json());

        //preserve data to the cache
        Cache::forever($endpoint, $data);
      } catch (\Throwable $th) {
        throw $th;
      }
    }
    return $data;
  }
}
