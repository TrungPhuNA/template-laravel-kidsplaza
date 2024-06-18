<?php

namespace App\View\Components;

use Illuminate\View\Component;

class progress extends Component
{
    public $width;
    public $progress;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($width, $progress)
    {
        $this->width = $width;
        $this->progress = $progress;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.progress');
    }
}
