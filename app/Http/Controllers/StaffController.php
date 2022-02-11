<?php

namespace App\Http\Controllers;

use App\Helpers\APIEndpoints;
use App\Helpers\APIHelper;
use Illuminate\Support\Str;

class StaffController extends Controller
{
  /**
   * Display the list of staff members
   *
   * @return \Illuminate\View\View
   */
  public function index($type)
  {
    //get staff members
    $staffMembers = APIHelper::getLiveCollection(APIEndpoints::GET_STAFF_MEMBERS, ['type' => $type]);

    $staffMembers = $staffMembers->sortBy(function ($record) {
      return $record->display_order;
    });

    $typeLabel = Str::title($type);

    return view('staff.index', compact('staffMembers', 'typeLabel'));
  }

  /**
   * Display the individual staff
   *
   * @return \Illuminate\View\View
   */
  public function info($staffId)
  {
    try {

      //get staff infor
      $endpoint = APIEndpoints::GET_STAFF_MEMBERS . "/" . $staffId;

      $staff = APIHelper::getLiveRecord($endpoint);

      $content = view('staff.show', compact('staff'))->render();
      return response()->json(compact('content'), 200);
    } catch (\Throwable $th) {
      return response()->json($th->getMessage(), 400);
    }
  }
}
