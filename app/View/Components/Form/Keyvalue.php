<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class Keyvalue extends Component
{
  public string $name;
  public $value;
  public Collection $values;
  public ?string $label = null;
  public string $id;
  public string $placeholderKey;
  public string $placeholderValue;
  public ?string $hint = null;

  /**
   * Type of value filed is number or not
   *
   * @var boolean
   */
  public bool $isNumber = false;

  /**
   * Create a new component instance.
   *
   * @param string $name
   * @param mixed $value
   * @param string $id
   * @param mixed $label
   * @param array $attributes
   * @param string $placeholderKey
   * @param string $placeholderValue
   * @param string $hint
   */
  public function __construct(
    string $name,
    $value = null,
    string $id = null,
    $label = null,
    array $attributes = [],
    string $placeholderKey = null,
    string $placeholderValue = null,
    string $hint = null,
    bool $isNumber = false
  ) {
    $this->name = $name;
    $this->id = $id ? $id : str_replace('_', '-', $name);
    $this->label = $label ? $label : ($label === false ? false : Str::title(str_replace('_', ' ', $name)));
    $this->attr = array_merge(['id' => $this->id, 'class' => 'input'], $attributes);
    $this->placeholderKey = Str::title(str_replace('_', ' ', $placeholderKey));
    $this->placeholderValue = Str::title(str_replace('_', ' ', $placeholderValue));
    if ($value) {
      $this->value = json_encode($value);
      $this->values = collect($value);
    } else {
      $this->values = collect();
    }
    $this->hint = $hint;
    $this->isNumber = $isNumber;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|string
   */
  public function render()
  {
    return view('components.forms.keyvalue');
  }
}
