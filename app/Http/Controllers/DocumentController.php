<?php

namespace App\Http\Controllers;

use App\Helpers\APIEndpoints;
use App\Helpers\APIHelper;

class DocumentController extends Controller
{
  /**
   * Display the list of documents
   *
   * @return \Illuminate\View\View
   */
  public function index()
  {
    //get documents
    $documents = APIHelper::getLiveCollection(APIEndpoints::GET_DOCUMENTS);

    return view('documents.index', compact('documents'));
  }
}
