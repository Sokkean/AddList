<?php

namespace App\View\Components;

use Illuminate\View\Component;

class btnBack extends Component
{
    public $btnback;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($btnback="")
    {
        $this->btnback = $btnback;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.btn-back');
    }
}
