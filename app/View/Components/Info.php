<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Info extends Component
{

  public $label;
  public $value;
  public $icon;
  public $classes;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($label, $value, $icon = null, $classes = 'has-text-black')
  {
    //
    $this->label = $label;
    $this->value = $value;
    $this->icon = $icon;
    $this->classes = $classes;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('components.info');
  }
}
