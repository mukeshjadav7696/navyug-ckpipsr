<?php

namespace App\Http\Controllers;

use App\Helpers\APIEndpoints;
use App\Helpers\APIHelper;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
  /**
   * Display the list of departments
   *
   * @return \Illuminate\View\View
   */
  public function index()
  {
    //get departments
    $departments = APIHelper::getLiveCollection(APIEndpoints::GET_DEPARTMENTS);

    return view('departments.index', compact('departments'));
  }

  /**
   * Display the individual department
   *
   * @return \Illuminate\View\View
   */
  public function info($departmentSlug)
  {
    //get departments
    $departments = Cache::get(APIEndpoints::GET_DEPARTMENTS);

    //get id of selected department
    $department = $departments->filter(function ($record) use ($departmentSlug) {
      return Str::slug($record['name']) == $departmentSlug;
    })->first();

    if (!$department) {
      return abort(404);
    }

    //get department info from server
    $endpoint = APIEndpoints::GET_DEPARTMENTS . "/" . $department['id'];
    try {
      $department = APIHelper::getLiveRecord($endpoint);
    } catch (\Throwable $th) {
      return back()->withErrors($th->getMessage());
    }
    return view('departments.info', compact('department'));
  }
}
