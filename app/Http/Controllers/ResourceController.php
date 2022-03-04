<?php

namespace App\Http\Controllers;

use App\Helpers\APIEndpoints;
use App\Helpers\APIHelper;
use Illuminate\Support\Str;

class ResourceController extends Controller
{

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
