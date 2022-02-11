<?php

namespace App\Providers;

use App\Helpers\APIEndpoints;
use App\Helpers\APIHelper;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ApiServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    //get api master values
    try {
      $departments = APIHelper::getCachedData(APIEndpoints::GET_DEPARTMENTS);
      $eventTypes = APIHelper::getCachedData(APIEndpoints::MASTER_EVENT_TYPES);
      $achievementTypes = APIHelper::getCachedData(APIEndpoints::MASTER_ACHIEVEMENT_TYPES);

      //share globally
      View::share('apiDepartments', $departments);
      View::share('apiEventTypes', $eventTypes);
      View::share('apiAchievementTypes', $achievementTypes);
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
