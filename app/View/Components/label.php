<?php

namespace App\View\Components;

use Illuminate\View\Component;

class label extends Component
{
    public $fr;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fr="")
    {
        $this->fr = $fr;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.label');
    }
}
