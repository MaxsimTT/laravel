<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MyInput extends Component
{
    public $myInput;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($myInput = 'text', $value = '')
    {
        $this->myInput = $myInput;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.my-input');
    }
}
