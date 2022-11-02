<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
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

    public function mypage(Request $request) {
        $clients = [
            (object) [
                'id'    => 1,
                'name'  => 'Maksim',
                'email' => 'qwerty@test.com',       
            ],
            (object) [
                'id'    => 2,
                'name'  => 'Danila',
                'email' => 'www@test.com',       
            ],
            (object) [
                'id'    => 3,
                'name'  => 'Zafar',
                'email' => 'abc@test.com',       
            ],
        ];

        return view('mypageblade', ['clients' => $clients]);
    }
}
