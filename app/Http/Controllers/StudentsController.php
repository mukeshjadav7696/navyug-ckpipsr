<?php

namespace App\Http\Controllers;

use App\Imports\CsvImport;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class StudentsController extends Controller
{
  /**
   * Display the scholorships view
   *
   * @return \Illuminate\View\View
   */
  public function alumni()
  {
    try {

      //path of alumni managing
      $path = Storage::path('data/alumni_executive.csv');
      $committeeE = Excel::toArray(new CsvImport, $path);
      $committeeE = $committeeE[0];

      $path = Storage::path('data/alumni_managing.csv');
      $committeeM = Excel::toArray(new CsvImport, $path);
      $committeeM = $committeeM[0];

      return view('students.alumni', compact('committeeE', 'committeeM'));
    } catch (\Throwable $th) {
      Log::error('StudentsController:timetables', [$th->getMessage()]);
      return back()->withErrors('Timetables data file not present.');
    }
  }


  /**
   * Display the scholorships view
   *
   * @return \Illuminate\View\View
   */
  public function scholorships()
  {
    try {
      //path of scholorship organisation file
      $path = Storage::path('data/scholorships_orgs.csv');
      $scOrgs = Excel::toArray(new CsvImport, $path);
      $scOrgs = $scOrgs[0];

      $path = Storage::path('data/scholorships_awarded.csv');
      $scAwarded = Excel::toArray(new CsvImport, $path);
      $scAwarded = collect($scAwarded[0])->sortBy('academic_year', SORT_STRING, true);
      return view('students.scholorships', compact('scOrgs', 'scAwarded'));
    } catch (\Throwable $th) {
      Log::error('StudentsController:timetables', [$th->getMessage()]);
      return back()->withErrors('Timetables data file not present.');
    }
  }

  /**
   * Display the timetables view
   *
   * @return \Illuminate\View\View
   */
  public function timetables()
  {
    //path of timetables file
    $path = Storage::path('data/timetables.csv');

    try {
      $timetables = Excel::toArray(new CsvImport, $path);
      $timetables = $timetables[0];
      return view('students.timetables', compact('timetables'));
    } catch (\Throwable $th) {
      Log::error('StudentsController:timetables', [$th->getMessage()]);
      return back()->withErrors('Timetables data file not present.');
    }
  }
}
