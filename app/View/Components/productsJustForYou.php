<?php

namespace App\View\Components;

use Illuminate\View\Component;

class productsJustForYou extends Component
{
    public $bg;
    public $carousel;
    public $data;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $bg = 'bg-blue-d1',
        $data = [],
        $carousel = false
    )
    {
        $this->bg = $bg;
        $this->data = $data;
        $this->carousel = $carousel;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.products-just-for-you',[
            'data' => $this->data,
        ]);
    }
}
