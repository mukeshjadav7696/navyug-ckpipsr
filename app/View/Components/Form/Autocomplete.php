<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Autocomplete extends Component
{
    public $name;
    public $value;
    public $id;
    public $label;
    public $placeholder;
    public $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $options, $value = null, $id = null, $label = null, $placeholder = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->id = $id ? $id : str_replace('_', '-', $name);
        $this->label = $label ? $label : ($label === false ? false : Str::title(str_replace('_', ' ', $name)));
        $this->options = $options;
        $this->placeholder = $placeholder ? $placeholder : "Enter";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forms.autocomplete');
    }
}
