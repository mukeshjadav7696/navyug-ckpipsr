<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Select extends Component
{

    public $name;
    public $value;
    public $options;
    public $id;
    public $label;
    public $placeholder;
    public $icon;
    public $attr;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $options = [], $value = null, $id = null, $label = null, $placeholder = 'Select', $icon = true, $attributes = [])
    {
        $this->name = $name;
        $this->options = $options;
        $this->value = $value;
        $this->id = $id ? $id : str_replace('_', '-', $name);
        $this->label = $label ? $label : ($label === false ? false : Str::title(str_replace('_', ' ', $name)));
        $this->icon = $icon;
        $defaults = [
            'id' => $this->id,
            'class' => 'custom-select',
            'placeholder' => $placeholder,
        ];
        $this->attr = array_merge($defaults, $attributes);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forms.select');
    }
}
