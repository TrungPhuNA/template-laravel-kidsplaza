<?php

namespace App\View\Components;

use Illuminate\View\Component;

class button extends Component
{
    public $class;
    public $text;
    public $icon;
    public $iconPosition;
    public $bsTarget;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class, $text, $icon='', $iconPosition='',$bsTarget = '')
    {
        $this->class = $class;
        $this->text = $text;
        $this->icon = $icon;
        $this->iconPosition = $iconPosition;
        $this->bsTarget = $bsTarget;
    }   

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
