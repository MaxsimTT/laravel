<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
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

    public function view(Request $request) {
        // return view('product', ['name' => 'car', 'prace' => 20000]);
        return view('product')
            ->with('name', 'car')
            ->with('prace', '100000');
    }
}
