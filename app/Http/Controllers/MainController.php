<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return 'invok' . '</br>' . $request->path();
    }

    public function home() {
        return 'home';
    }

    public function map() {
        return 'map';
    }

    public function massage($id = 1) {
        return $id;
    } 
}
