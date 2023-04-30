<?php

namespace App\Http\Controllers;

use App\Helpers\APIEndpoints;
use App\Helpers\APIHelper;
use App\Imports\CsvImport;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ResourceController extends Controller
{
  /**
   * echarge
   *
   * @return \Illuminate\View\View
   */
  public function echarge()
  {
    return view('resources.echarge');
  }

  /**
   * transportation
   *
   * @return \Illuminate\View\View
   */
  public function transportation()
  {
    return view('resources.transportation');
  }

  /**
   * cafeteria
   *
   * @return \Illuminate\View\View
   */
  public function cafeteria()
  {
    $photos = [];
    for ($i = 1; $i <= 6; $i++) {
      array_push($photos, asset("images/resources/cafeteria/{$i}.jpeg"));
    }
    return view('resources.cafeteria', compact('photos'));
  }

  /**
   * Seminar Hall
   *
   * @return \Illuminate\View\View
   */
  public function seminarHall()
  {
    $photos = [];
    for ($i = 1; $i <= 6; $i++) {
      array_push($photos, asset("images/resources/seminar-hall/{$i}.jpg"));
    }
    return view('resources.seminar_hall', compact('photos'));
  }

  /**
   * Medical
   *
   * @return \Illuminate\View\View
   */
  public function medical()
  {
    $photos = [];
    for ($i = 1; $i <= 7; $i++) {
      array_push($photos, asset("images/resources/medical/0{$i}.jpg"));
    }
    return view('resources.medical', compact('photos'));
  }

  /**
   * Central facilities
   *
   * @return \Illuminate\View\View
   */
  public function central()
  {
    return view('resources.central');
  }


  /**
   * Hoste
   *
   * @return \Illuminate\View\View
   */
  public function hostel()
  {
    return view('resources.hostel.hostel');
  }


  /**
   * Sports facilities
   *
   * @return \Illuminate\View\View
   */
  public function sports()
  {
    //path of file
    $path = Storage::path('data/resources/sports.csv');

    try {
      $grounds = Excel::toArray(new CsvImport, $path);
      $grounds = $grounds[0];
      return view('resources.sports', compact('grounds'));
    } catch (\Throwable $th) {
      Log::error('ResourceController:sports', [$th->getMessage()]);
      return back()->withErrors('Sports data file not present.');
    }
  }

  /**
   * Show laboratories page
   *
   * @return \Illuminate\View\View
   */
  public function laboratories()
  {
    //get photos
    $laboratories = APIHelper::getLiveCollection(APIEndpoints::GET_LABS);

    return view('resources.laboratories.index', compact('laboratories'));
  }

  /**
   * Show photo gallery page
   *
   * @return \Illuminate\View\View
   */
  public function photoGallery()
  {
    //get photos
    $photos = APIHelper::getLiveCollection(APIEndpoints::GET_PHOTOS);

    return view('resources.photos.index', compact('photos'));
  }
}
