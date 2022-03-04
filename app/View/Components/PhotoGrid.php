<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class PhotoGrid extends Component
{

  public $id;
  public $photos;
  public $isBig;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($photos, $isBig = false)
  {
    $this->id = Str::uuid();
    $this->photos = $photos;
    $this->isBig = $isBig;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('components.photo-grid');
  }
}
