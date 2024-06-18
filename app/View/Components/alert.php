<?php

namespace App\View\Components;

use Illuminate\View\Component;

class alert extends Component
{
    public $text;
    public $bg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $bg)
    {
        $this->text = $text;
        $this->bg = $bg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert',['user'=>auth()->user()]);
    }
}
