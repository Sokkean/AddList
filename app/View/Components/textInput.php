<?php

namespace App\View\Components;

use Illuminate\View\Component;

class textInput extends Component
{
    public $type,$id,$name,$place,$value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type="",$id="",$name="", $place="",$value="")
    {
        $this->type = $type;
        $this->id = $id;
        $this->name = $name;
        $this->place = $place;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text-input');
    }
}
