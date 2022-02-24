<?php

namespace App\Http\Controllers;

use App\Helpers\APIEndpoints;
use App\Helpers\APIHelper;
use Illuminate\Support\Str;

class ResourceController extends Controller
{
  /**
   * Show photo gallery page
   *
   * @return \Illuminate\View\View
   */
  public function photoGallery()
  {
    //get photos
    $photos = APIHelper::getLiveCollection(APIEndpoints::GET_PHOTOS);

    return view('resources.photo_gallery', compact('photos'));
  }
}
