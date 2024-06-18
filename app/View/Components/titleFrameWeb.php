<?php

namespace App\View\Components;

use Illuminate\View\Component;

class titleFrameWeb extends Component
{
    public $title;
    public $nav;
    public $textColor;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $nav, $textColor = 'text-bule204')
    {
        $this->title = $title;
        $this->nav = $nav;
        $this->textColor = $textColor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.title-frame-web');
    }
}
