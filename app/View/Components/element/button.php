<?php

namespace App\View\Components\element;

use Illuminate\View\Component;
class button extends Component
{
    public $class,$type;
    // public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class="",$type="")
    // public function __construct($message)
    {

        $this->class = $class;
        $this->type = $type;
        // $this->size = $size;
        // $this->title = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.element.button');
    }
}
