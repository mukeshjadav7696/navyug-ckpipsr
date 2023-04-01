<?php

namespace App\Http\Controllers;

use App\Imports\CsvImport;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ResearchInnovationController extends Controller
{

  /**
   * `about` page
   *
   * @return \Illuminate\View\View
   */
  public function about()
  {
    return view('rni.research.about');
  }

  /**
   * `ethics` page
   *
   * @return \Illuminate\View\View
   */
  public function ethics()
  {
    return view('rni.research.ethics');
  }

  /**
   * `patents` page
   *
   * @return \Illuminate\View\View
   */
  public function patents()
  {
    return view('rni.research.patents');
  }

  /**
   * `publications` page
   *
   * @return \Illuminate\View\View
   */
  public function publications()
  {
    return view('rni.research.publications');
  }

  /**
   * `mous` page
   *
   * @return \Illuminate\View\View
   */
  public function mous()
  {
    return view('rni.research.mous');
  }

  /**
   * `books` page
   *
   * @return \Illuminate\View\View
   */
  public function books()
  {
    return view('rni.research.books');
  }

  /**
   * `consultancy` page
   *
   * @return \Illuminate\View\View
   */
  public function consultancy()
  {
    return view('rni.research.consultancy');
  }

  /**
   * `grants` page
   *
   * @return \Illuminate\View\View
   */
  public function grants()
  {
    return view('rni.research.grants');
  }

  /**
   * `doctaral` page
   *
   * @return \Illuminate\View\View
   */
  public function doctaral()
  {
    return view('rni.research.doctaral');
  }

  /**
   * `pg` page
   *
   * @return \Illuminate\View\View
   */
  public function pg()
  {
    return view('rni.research.pg');
  }

  /**
   * `ssipAbout` page
   *
   * @return \Illuminate\View\View
   */
  public function ssipAbout()
  {
    try {
      //path of alumni managing
      $path = Storage::path('data/rni/ssip_core.csv');
      $committeeC = Excel::toArray(new CsvImport, $path);
      $committeeC = $committeeC[0];

      $path = Storage::path('data/rni/ssip_scrutiny.csv');
      $committeeS = Excel::toArray(new CsvImport, $path);
      $committeeS = $committeeS[0];

      return view('rni.ssip.about', compact('committeeC', 'committeeS'));
    } catch (\Throwable $th) {
      Log::error('StudentsController:ssip', [$th->getMessage()]);
      return back()->withErrors('SSIP data file not present.');
    }
  }

  /**
   * `ssipMentors` page
   *
   * @return \Illuminate\View\View
   */
  public function ssipMentors()
  {
    return view('rni.ssip.mentors');
  }

  /**
   * `ssipUpdates` page
   *
   * @return \Illuminate\View\View
   */
  public function ssipUpdates()
  {
    return view('rni.ssip.updates');
  }


  /**
   * `ssipApply` page
   *
   * @return \Illuminate\View\View
   */
  public function ssipApply()
  {
    return view('rni.ssip.apply');
  }

  /**
   * `iic` page
   *
   * @return \Illuminate\View\View
   */
  public function iic()
  {
    return view('rni.iic');
  }
}
