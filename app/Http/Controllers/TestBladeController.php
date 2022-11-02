<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestBladeController extends Controller
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

    public function testBlade(Request $request) {
        return view('testblade', ['name' => 'Danya', 'lastname' => '<b>Egorov</b>']);
    }

    public function extendedTemplate() {
        return view('childs.view');
    }
}
