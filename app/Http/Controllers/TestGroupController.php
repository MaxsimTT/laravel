<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestGroupController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function viewOne() {
        echo url()->full() . '<br />';
    }

    public function viewTwo() {
        echo url()->full() . '<br />';
    }

    public function viewThree() {
        echo url()->full() . '<br />';
    }
}
