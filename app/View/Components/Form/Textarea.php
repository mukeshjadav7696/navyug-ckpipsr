<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Textarea extends Component
{

  public string $name;
  public ?string $value = null;
  public string $id;
  public ?string $label = null;
  public ?string $placeholder = null;
  public string $class;
  public ?string $hint = null;

  /**
   * Create a new component instance.
   *
   * @param string $name
   * @param string $value
   * @param string $id
   * @param boolean $label
   * @param string $classes
   * @param string $placeholder
   * @param string $hint
   */
  public function __construct(
    string $name,
    string $value = null,
    string $id = null,
    $label = null,
    string $classes = null,
    string $placeholder = null,
    string $hint = null
  ) {
    $this->name = $name;
    $this->value = $value;
    $this->id = $id ? $id : str_replace('_', '-', $name);
    $this->label = $label ? $label : ($label === false ? false : Str::title(str_replace('_', ' ', $name)));
    $this->class = "textarea " . $classes;
    if ($this->label === false) {
      $this->placeholder = Str::title(str_replace('_', ' ', $name));
    }
    if ($placeholder) {
      $this->placeholder = $placeholder;
    }
    $this->hint = $hint;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('components.forms.textarea');
  }
}
