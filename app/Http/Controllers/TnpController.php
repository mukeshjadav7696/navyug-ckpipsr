<?php

namespace App\Http\Controllers;

use App\Imports\CsvImport;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class TnpController extends Controller
{

  /**
   * Visits
   *
   * @return \Illuminate\View\View
   */
  public function visits()
  {
    //path of file
    $path = Storage::path('data/tnp/visits.csv');

    try {
      $visits = Excel::toArray(new CsvImport, $path);
      $visits = collect($visits[0])->sortBy('academic_year', SORT_STRING, true);
      return view('tnp.visits', compact('visits'));
    } catch (\Throwable $th) {
      Log::error('TnpController:cpc', [$th->getMessage()]);
      return back()->withErrors('Visits data file not present.');
    }
  }

  /**
   * Placements
   *
   * @return \Illuminate\View\View
   */
  public function placements()
  {
    //path of file
    $path = Storage::path('data/tnp/placements.csv');

    try {
      $placements = Excel::toArray(new CsvImport, $path);
      $placements = collect($placements[0])->sortBy('academic_year', SORT_STRING, true);
      return view('tnp.placements', compact('placements'));
    } catch (\Throwable $th) {
      Log::error('TnpController:cpc', [$th->getMessage()]);
      return back()->withErrors('Placements data file not present.');
    }
  }

  /**
   * CPC cell
   *
   * @return \Illuminate\View\View
   */
  public function committee()
  {
    //path of file
    $path = Storage::path('data/cells/cpc.csv');

    try {
      $committee = Excel::toArray(new CsvImport, $path);
      $committee = $committee[0];
      return view('tnp.committee', compact('committee'));
    } catch (\Throwable $th) {
      Log::error('TnpController:committee', [$th->getMessage()]);
      return back()->withErrors('CPC data file not present.');
    }
  }
}
