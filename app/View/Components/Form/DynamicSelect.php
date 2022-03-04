<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class DynamicSelect extends Component
{
    public $name;
    public $options;
    public $route;
    public $child;
    public $value;
    public $id;
    public $label;
    public $placeholder;
    public $attr;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $route, $child, $options = [], $value = null, $id = null, $label = null, $placeholder = 'Select', $attributes = [])
    {
        $this->name = $name;
        $this->options = $options;
        $this->value = $value;
        $this->id = $id ? $id : str_replace('_', '-', $name);
        $this->label = $label ? $label : ($label === false ? false : Str::title(str_replace('_', ' ', $name)));
        $defaults = [
            'id' => $this->id,
            'class' => 'custom-select',
            'placeholder' => $placeholder,
        ];
        $this->attr = array_merge($defaults, $attributes);
        $this->route = $route;
        $this->child = $child;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forms.dynamic-select');
    }
}
