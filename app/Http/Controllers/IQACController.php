<?php

namespace App\Http\Controllers;

use App\Imports\CsvImport;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class IQACController extends Controller
{

  /**
   * `rti` page
   *
   * @return \Illuminate\View\View
   */
  public function rti()
  {
    return view('iqac.rti');
  }

  /**
   * `nirf` page
   *
   * @return \Illuminate\View\View
   */
  public function nirf()
  {
    $reports = config('site.documents.iqac.nirf.reports');
    return view('iqac.nirf', compact('reports'));
  }

  /**
   * `about` page
   *
   * @return \Illuminate\View\View
   */
  public function about()
  {
    return view('iqac.about');
  }

  /**
   * `composition` page
   *
   * @return \Illuminate\View\View
   */
  public function composition()
  {
    //path of file
    $path = Storage::path('data/iqac/composition.csv');

    try {
      $committee = Excel::toArray(new CsvImport, $path);
      $committee = $committee[0];
      return view('iqac.composition', compact('committee'));
    } catch (\Throwable $th) {
      Log::error('CellsController:iqac', [$th->getMessage()]);
      return back()->withErrors('IQAC data file not present.');
    }
  }

  /**
   * `initiatives` page
   *
   * @return \Illuminate\View\View
   */
  public function initiatives()
  {
    return view('iqac.initiatives');
  }

  /**
   * `moms` page
   *
   * @return \Illuminate\View\View
   */
  public function moms()
  {
    $reports = config('site.documents.iqac.moms');
    return view('iqac.moms', compact('reports'));
  }

  /**
   * `aishe` page
   *
   * @return \Illuminate\View\View
   */
  public function aishe()
  {
    $reports = config('site.documents.iqac.aishe.reports');
    return view('iqac.aishe', compact('reports'));
  }

  /**
   * `iiqa` page
   *
   * @return \Illuminate\View\View
   */
  public function iiqa()
  {
    return view('iqac.iiqa');
  }

  /**
   * `practices` page
   *
   * @return \Illuminate\View\View
   */
  public function practices()
  {
    $url = config('site.documents.iqac.common.practices');
    return view('iqac.practices', compact('url'));
  }

  /**
   * `distinctiveness` page
   *
   * @return \Illuminate\View\View
   */
  public function distinctiveness()
  {
    $url = config('site.documents.iqac.common.distinctiveness');
    return view('iqac.distinctiveness', compact('url'));
  }
}
