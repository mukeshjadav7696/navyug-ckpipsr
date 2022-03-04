<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class ImagePicker extends Component
{
  public string $name;
  public ?string $src;
  public string $id;
  public int $rotate;
  public bool $controls;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  /**
   * Create a new component instance
   *
   * @param string $name
   * @param string $src
   * @param integer $rotate
   * @param boolean $controls
   */
  public function __construct(
    string $name,
    string $src = null,
    int $rotate = 10,
    bool $controls = true
  ) {
    //
    $this->name = $name;
    $this->src = $src;
    $this->id = Str::uuid();
    $this->rotate = $rotate;
    $this->controls = $controls;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.forms.image-picker');
  }
}
