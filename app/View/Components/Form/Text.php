<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Text extends Component
{

  public $name;
  public $value;
  public $id;
  public $label;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($name, $value = null, $id = null, $label = null)
  {
    $this->name = $name;
    $this->value = $value;
    $this->id = $id ? $id : str_replace('_', '-', $name);
    $this->label = $label ? $label : ($label === false ? false : Str::title(str_replace('_', ' ', $name)));
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('components.forms.text');
  }
}
