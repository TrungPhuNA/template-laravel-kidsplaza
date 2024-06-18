<?php

namespace App\View\Components;

use Illuminate\View\Component;

class frameProductLayoutDisplay extends Component
{
    public $title;
    public $nav;
    public $banner;
    public $properties;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $nav, $banner, $properties)
    {
        $this->title = $title;
        $this->nav = $nav;
        $this->banner = $banner;
        $this->properties = $properties;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frame-product-layout-display');
    }
}
