<?php

namespace App\View\Components;

use Illuminate\View\Component;

class productsJustForYou extends Component
{
    public $bg;
    public $carousel;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $bg = 'bg-blue-d1',
        $carousel = false
    )
    {
        $this->bg = $bg;
        $this->carousel = $carousel;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.products-just-for-you');
    }
}
