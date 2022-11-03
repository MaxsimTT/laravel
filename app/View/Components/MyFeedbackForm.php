<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MyFeedbackForm extends Component
{
    public $email;
    public $myName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($email, $myName)
    {
        $this->email = $email;
        $this->myName = $myName;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.my-feedback-form');
    }
}
