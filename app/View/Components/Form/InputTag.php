<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class InputTag extends Component
{
    public $name;
    public $values;
    public $value;
    public $id;
    public $label;
    public $placeholder;
    public $isSelect;
    public $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $values = [], $id = null, $label = null, $options = [])
    {
        $this->name = $name;
        $this->values = is_null($values) ? [] : $values;
        $this->value = implode(', ', $this->values);
        $this->id = $id ? $id : str_replace('_', '-', $name);
        $this->label = $label ? $label : Str::title(str_replace('_', ' ', $name));
        if (count($options) > 0) {
            $this->name = $this->name . '[]';
            $this->placeholder = "Select next";
            $this->isSelect = true;
            $this->options = $options;
        } else {
            $this->placeholder = "Enter next";
            $this->isSelect = false;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forms.input-tag');
    }
}
