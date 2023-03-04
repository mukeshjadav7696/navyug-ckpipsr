<?php

namespace App\Http\Controllers;

use App\Helpers\APIEndpoints;
use App\Helpers\APIHelper;

class ActivityController extends Controller
{

  /**
   * Display the list of staff members
   * 
   * @param int $achievementTypeId
   *
   * @return \Illuminate\View\View
   */
  public function typeAchievements($achievementTypeId)
  {
    //get achievements from first type
    $parameters = [
      'achievement_type_id' => $achievementTypeId
    ];
    $achievements = APIHelper::getLiveCollection(APIEndpoints::GET_ACHIEVEMENTS, $parameters);

    $content = view('activities.achievements.list', compact('achievements'))->render();

    return response()->json([
      'content' => $content
    ]);
  }
  /**
   * Display the list of achievements with types
   *
   * @return \Illuminate\View\View
   */
  public function achievements()
  {
    //get photos
    $achievementTypes = APIHelper::getLiveCollection(APIEndpoints::MASTER_ACHIEVEMENT_TYPES);

    //sort achievement types by names
    $achievementTypes = $achievementTypes->sort();

    //get achievements from first type
    $parameters = [
      'achievement_type_id' => $achievementTypes->keys()->first()
    ];
    $achievements = APIHelper::getLiveCollection(APIEndpoints::GET_ACHIEVEMENTS, $parameters);

    return view('activities.achievements.index', compact('achievementTypes', 'achievements'));
  }

  /**
   * Display the list of staff members
   * 
   * @param int $eventTypeId
   *
   * @return \Illuminate\View\View
   */
  public function typeEvents($eventTypeId)
  {
    //get events from first type
    $parameters = [
      'event_type_id' => $eventTypeId
    ];
    $events = APIHelper::getLiveCollection(APIEndpoints::GET_EVENTS, $parameters);

    $content = view('activities.events.list', compact('events'))->render();

    return response()->json([
      'content' => $content
    ]);
  }
  /**
   * Display the list of events with types
   *
   * @return \Illuminate\View\View
   */
  public function events()
  {
    //get photos
    $eventTypes = APIHelper::getLiveCollection(APIEndpoints::MASTER_EVENT_TYPES);

    //sort event types by names
    $eventTypes = $eventTypes->sort();

    //get events from first type
    $parameters = [
      'event_type_id' => $eventTypes->keys()->first()
    ];
    $events = APIHelper::getLiveCollection(APIEndpoints::GET_EVENTS, $parameters);

    return view('activities.events.index', compact('eventTypes', 'events'));
  }
}
