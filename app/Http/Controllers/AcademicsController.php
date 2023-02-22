<?php

namespace App\Http\Controllers;

class AcademicsController extends Controller
{
  /**
   * Display the courses view
   *
   * @return \Illuminate\View\View
   */
  public function courses()
  {
    return view('academics.courses');
  }

  /**
   * Display the admission view
   *
   * @return \Illuminate\View\View
   */
  public function admission()
  {
    return view('academics.admission');
  }

  /**
   * Display the approval view
   *
   * @return \Illuminate\View\View
   */
  public function approvals()
  {
    return view('academics.approvals');
  }
}
