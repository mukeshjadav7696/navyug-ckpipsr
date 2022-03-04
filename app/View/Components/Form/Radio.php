<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Radio extends Component
{
    public $name;
    public $value;
    public $id;
    public $label;
    public $attr;
    public $options;
    public $classes;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     * @param boolean $label
     * @param string $classes
     * @param array $attributes
     */
    public function __construct($name, $value = null, $options = [], $label = false, $classes = '', $attributes = [])
    {
        $this->name = $name;
        $this->value = $value;
        $this->label = $label ? $label : ($label === false ? false : Str::title(str_replace('_', ' ', $name)));

        //prepare options
        $radioOptions = [];
        foreach ($options as $value => $label) {
            $radioOptions[] = [
                'id' => Str::uuid(),
                'value' => $value,
                'label' => $label,
            ];
        }
        $this->options = $radioOptions;

        //prepare attributes
        $this->attr = "";
        foreach ($attributes as $key => $value) {
            $this->attr = $this->attr . " $key=$value";
        }
        $this->classes = $classes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forms.radio');
    }
}
