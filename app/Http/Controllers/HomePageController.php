<?php

namespace App\Http\Controllers;

use App\Helpers\APIEndpoints;
use App\Helpers\APIHelper;

class HomePageController extends Controller
{
  /**
   * Display the login view.
   *
   * @return \Illuminate\View\View
   */
  public function home()
  {
    try {
      //get institute data      
      [$photos, $announcements, $notices, $events, $achievements] = $this->getServerData();
      $serverData = compact('photos', 'announcements', 'notices', 'events', 'achievements');
    } catch (\Throwable $th) {
      $serverData = [
        'photos' => collect(),
        'announcements' => collect(),
        'notices' => collect(),
        'events' => collect(),
        'achievements' => collect(),
      ];
    }

    return view('home', $serverData);
  }

  public function welcome()
  {
    return view('welcome');
  }

  /**
   * Get data from server for home page
   *
   * @return array
   */
  private function getServerData()
  {
    //get photos
    $parameters = [
      'is_home' => true,
    ];
    $photos = APIHelper::getLiveCollection(APIEndpoints::GET_PHOTOS, $parameters);

    //get announcements
    $parameters = [
      'is_home' => true,
      'type' => 'ANNOUNCEMENT',
      'date_format' => 'd-m'
    ];
    $announcements = APIHelper::getLiveCollection(APIEndpoints::GET_ANNOUNCEMENTS, $parameters);

    //get news
    $parameters = [
      'is_home' => true,
      'type' => 'NOTICE',
      'date_format' => 'd-m'
    ];
    $notices = APIHelper::getLiveCollection(APIEndpoints::GET_ANNOUNCEMENTS, $parameters);

    //get events
    $parameters = [
      'is_home' => true,
    ];
    $events = APIHelper::getLiveCollection(APIEndpoints::GET_EVENTS, $parameters);

    //get events
    $parameters = [
      'is_home' => true,
      'date_format' => 'M d, y'
    ];
    $achievements = APIHelper::getLiveCollection(APIEndpoints::GET_ACHIEVEMENTS, $parameters);

    return [$photos, $announcements, $notices, $events, $achievements];
  }
}
