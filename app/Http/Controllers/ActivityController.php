<?php

namespace App\Http\Controllers;

use App\Helpers\APIEndpoints;
use App\Helpers\APIHelper;
use Illuminate\Support\Str;

class ActivityController extends Controller
{

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
    $eventTypes = APIHelper::getCachedData(APIEndpoints::MASTER_EVENT_TYPES);

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
