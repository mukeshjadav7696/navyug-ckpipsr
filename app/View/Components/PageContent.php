<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageContent extends Component
{

  public $padding;

  /**
   * Create a new component instance.
   *
   * @param array $breadcrumbs
   * @return void
   */
  public function __construct($padding = true)
  {
    //
    $this->padding = $padding;
  }

  /**
   * Get the view / contents that represents the component.
   *
   * @return \Illuminate\View\View
   */
  public function render()
  {
    return view('components.page-content');
  }
}
