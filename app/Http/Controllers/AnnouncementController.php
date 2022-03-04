<?php

namespace App\Http\Controllers;

use App\Helpers\APIEndpoints;
use App\Helpers\APIHelper;

class AnnouncementController extends Controller
{
  /**
   * Display the list of announcements
   *
   * @param string $type
   * @return \Illuminate\View\View
   */
  public function index($type)
  {
    //get announcements
    $parameters = [
      'type' => $type,
    ];
    $announcements = APIHelper::getLiveCollection(APIEndpoints::GET_ANNOUNCEMENTS, $parameters);

    switch ($type) {
      case 'announcement':
        $title = 'News and Announcements';
        break;
      case 'notice':
        $title = 'Student Noticeboard';
        break;
      default:
        $title = 'Announcements';
        break;
    }

    return view('announcements.index', compact('announcements', 'title'));
  }
}
