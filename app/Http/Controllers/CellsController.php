<?php

namespace App\Http\Controllers;

use App\Imports\CsvImport;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class CellsController extends Controller
{

  /**
   * CPC cell
   *
   * @return \Illuminate\View\View
   */
  public function cpc()
  {
    //path of file
    $path = Storage::path('data/cells/cpc.csv');

    try {
      $committee = Excel::toArray(new CsvImport, $path);
      $committee = $committee[0];
      return view('cells.cpc', compact('committee'));
    } catch (\Throwable $th) {
      Log::error('CellsController:cpc', [$th->getMessage()]);
      return back()->withErrors('CPC data file not present.');
    }
  }

  /**
   * SC-ST cell
   *
   * @return \Illuminate\View\View
   */
  public function scst()
  {
    //path of file
    $path = Storage::path('data/cells/scst.csv');

    try {
      $committee = Excel::toArray(new CsvImport, $path);
      $committee = $committee[0];
      return view('cells.scst', compact('committee'));
    } catch (\Throwable $th) {
      Log::error('CellsController:scst', [$th->getMessage()]);
      return back()->withErrors('SC-ST data file not present.');
    }
  }

  /**
   * ADC cell
   *
   * @return \Illuminate\View\View
   */
  public function adc()
  {
    //path of file
    $path = Storage::path('data/cells/adc.csv');

    try {
      $committee = Excel::toArray(new CsvImport, $path);
      $committee = $committee[0];
      return view('cells.adc', compact('committee'));
    } catch (\Throwable $th) {
      Log::error('CellsController:adc', [$th->getMessage()]);
      return back()->withErrors('ADC data file not present.');
    }
  }

  /**
   * GSC cell
   *
   * @return \Illuminate\View\View
   */
  public function gsc()
  {
    //path of file
    $path = Storage::path('data/cells/gsc.csv');

    try {
      $committee = Excel::toArray(new CsvImport, $path);
      $committee = $committee[0];
      return view('cells.gsc', compact('committee'));
    } catch (\Throwable $th) {
      Log::error('CellsController:gsc', [$th->getMessage()]);
      return back()->withErrors('GSC data file not present.');
    }
  }

  /**
   * WDC cell
   *
   * @return \Illuminate\View\View
   */
  public function wdc()
  {
    //path of file
    $path = Storage::path('data/cells/wdc.csv');

    try {
      $committee = Excel::toArray(new CsvImport, $path);
      $committee = $committee[0];
      return view('cells.wdc', compact('committee'));
    } catch (\Throwable $th) {
      Log::error('CellsController:wdc', [$th->getMessage()]);
      return back()->withErrors('ARC data file not present.');
    }
  }


  /**
   * ARC cell
   *
   * @return \Illuminate\View\View
   */
  public function arc()
  {
    //path of file
    try {
      $path = Storage::path('data/cells/arc.csv');
      $committee = Excel::toArray(new CsvImport, $path);
      $committee = $committee[0];

      $path = Storage::path('data/cells/ars.csv');
      $squad = Excel::toArray(new CsvImport, $path);
      $squad = $squad[0];
    } catch (\Throwable $th) {
      Log::error('CellsController:arc', [$th->getMessage()]);
      return back()->withErrors('ARC data file not present.');
    }
    return view('cells.arc', compact('committee', 'squad'));
  }

  /**
   * GRC cell
   *
   * @return \Illuminate\View\View
   */
  public function grc()
  {
    //path of file
    $path = Storage::path('data/cells/grc.csv');

    try {
      $committee = Excel::toArray(new CsvImport, $path);
      $committee = $committee[0];
      return view('cells.grc', compact('committee'));
    } catch (\Throwable $th) {
      Log::error('CellsController:grc', [$th->getMessage()]);
      return back()->withErrors('GRC data file not present.');
    }
  }

  /**
   * IQAC cell
   *
   * @return \Illuminate\View\View
   */
  public function iqac()
  {
    //path of file
    $path = Storage::path('data/cells/iqac.csv');

    try {
      $committee = Excel::toArray(new CsvImport, $path);
      $committee = $committee[0];
      return view('cells.iqac', compact('committee'));
    } catch (\Throwable $th) {
      Log::error('CellsController:iqac', [$th->getMessage()]);
      return back()->withErrors('IQAC data file not present.');
    }
  }
}
