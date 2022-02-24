<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NotFound extends Component
{

  public $type;
  public $message;
  public $isFull;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($type = 'danger', $message = 'Detail not found', $isFull = false)
  {
    $this->type = $type;
    $this->message = $message;
    $this->isFull = $isFull;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('components.not-found');
  }
}
