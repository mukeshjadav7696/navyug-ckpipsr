<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Checkbox extends Component
{

  public $name;
  public $multiple;
  public $options;
  public $value;
  public $id;
  public $label;
  public $margin;
  public $classes;

  /**
   * Create a new component instance.
   *
   * @param string $name
   * @param array $options
   * @param mixed $value - In case of multiple, should be array
   * @param mixed $label
   * @param string $classes
   * @param boolean $margin
   */
  public function __construct($name, $options = [], $value = null, $label = null, $classes = '', $margin = true)
  {
    $this->name = $name;
    $this->classes = $classes;
    $this->label = $label ? $label : ($label === false ? false : Str::title(str_replace('_', ' ', $name)));

    if ($options && count($options) > 0) {
      $this->multiple = true;
      $this->name = $this->name . "[]";
      //prepare options
      $checkOptions = [];
      foreach ($options as $val => $label) {
        //is_checked
        $checked = is_array($value) && in_array($val, $value);
        $checkOptions[] = [
          'id' => Str::uuid(),
          'value' => $val,
          'label' => $label,
          'checked' => $checked,
        ];
      }
      $this->options = $checkOptions;
      $this->margin = '';
    } else {
      $this->multiple = false;
      $this->value = $value;
      $this->id = Str::uuid();
      $this->options = [];
      $this->margin = $margin ? 'pt-5 mt-2' : '';
    }
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('components.forms.checkbox');
  }
}
