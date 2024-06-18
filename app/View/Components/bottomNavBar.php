<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class bottomNavBar extends Component
{
    public $page;
    public $data;
    /**
     * Create a new component instance.
     */
    public function __construct($page, $data = [])
    {
        $this->page = $page;
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bottom-nav-bar', [
            'page' => $this->page,
            'data' => $this->data
        ]);
    }
}
