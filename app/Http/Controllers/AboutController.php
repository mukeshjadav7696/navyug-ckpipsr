<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
  /**
   * Display the principal
   *
   * @return \Illuminate\View\View
   */
  public function principal()
  {
    return view('about.principal');
  }

  /**
   * Display the profile view
   *
   * @return \Illuminate\View\View
   */
  public function profile()
  {
    return view('about.profile');
  }

  /**
   * Display the trust view
   *
   * @return \Illuminate\View\View
   */
  public function trust()
  {
    return view('about.trust');
  }

  /**
   * Display the vision mission view
   *
   * @return \Illuminate\View\View
   */
  public function visionMission()
  {
    return view('about.vision_mission');
  }

  /**
   * Display the PO PEOs view
   *
   * @return \Illuminate\View\View
   */
  public function poPeos()
  {
    return view('about.po_peos');
  }

  /**
   * Display the founder view
   *
   * @return \Illuminate\View\View
   */
  public function founder()
  {
    return view('about.founder');
  }

  /**
   * Display the governing body view
   *
   * @return \Illuminate\View\View
   */
  public function governingBody()
  {
    return view('about.governing_body');
  }

  /**
   * Display the contact us view
   *
   * @return \Illuminate\View\View
   */
  public function contactUs()
  {
    return view('about.contact_us');
  }
}
