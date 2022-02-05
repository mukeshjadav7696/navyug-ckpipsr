<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
  /**
   * Display the login view.
   *
   * @return \Illuminate\View\View
   */
  public function home()
  {
    return view('home');
  }

  public function welcome()
  {
    return view('welcome');
  }
}
