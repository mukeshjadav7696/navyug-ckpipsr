<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class File extends Component
{
  public $name;
  public $label;
  public $placeholder;
  public $id;
  public $type;
  public $accept;
  public $box;

  /**
   * Create a new component instance.
   *
   * @param string $name
   * @param string $placeholder
   * @return void
   */
  public function __construct($name, $label = null, $id = null, $type = null, $placeholder = 'Choose a file', $box = false)
  {
    $this->name = $name;
    $this->label = $label ? $label : ($label === false ? false : Str::title(str_replace('_', ' ', $name)));
    $this->placeholder = $placeholder;
    $this->box = $box;
    $this->id = $id ? $id : str_replace('_', '-', $name);
    switch ($type) {
      case 'pdf':
        $this->accept = '.pdf';
        break;
      case 'excel':
        $this->accept = '.xls,.xlsx';
        break;
      case 'image':
        $this->accept = 'image/*';
        break;
      default:
        $this->accept = '*';
        break;
    }
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('components.file');
  }
}
