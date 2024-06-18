<?php

namespace App\View\Components;

use Illuminate\View\Component;

class formInfo extends Component
{
    public $idModal;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($idModal = '')
    {
        $this->idModal = $idModal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-info');
    }
}
