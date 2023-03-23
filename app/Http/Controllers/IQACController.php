<?php

namespace App\Http\Controllers;

class IQACController extends Controller
{

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
    return view('iqac.composition');
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
    return view('iqac.moms');
  }

  /**
   * `aishe` page
   *
   * @return \Illuminate\View\View
   */
  public function aishe()
  {
    return view('iqac.aishe');
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
    return view('iqac.practices');
  }

  /**
   * `distinctiveness` page
   *
   * @return \Illuminate\View\View
   */
  public function distinctiveness()
  {
    return view('iqac.distinctiveness');
  }
}
