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
    return redirect('welcome');
  }

  public function welcome()
  {
    return view('welcome');
  }
}
