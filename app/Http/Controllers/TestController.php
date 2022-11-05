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

        return view('mypageblade');
    }

    public function clients(Request $request) {
        return view('clients');
    }

    public function clientsLayout(Request $request) {
        return view('childs.clientslayout');
    }

    public function contacts(Request $request) {
        $path = $request->path();
        return view('contacts', ['path' => $path]);
    }

    public function contactsLayout(Request $request) {
        $path = $request->path();
        return view('childs.contactslayout', ['path' => $path]);
    }

    public function testLayout(Request $request) {
        return view('childs.layout');
    }

    public function testlayoutcomp(Request $request) {
        return view('testlayoutcomp');
    }

    public function requestMethod(Request $request) {
        echo $request->header('Host') . '<br />';
        echo $request->method() . '<br />';
        echo $request->isMethod('GET') . '<br />';
        echo $request->ip() . '<br />';
        echo $request->path() . '<br />';
        echo $request->url() . '<br />';
        echo $request->fullUrl() . '<br />';
        echo $request->fullUrlWithQuery(['c' => 3, 'd' => 4]) . '<br />';

        echo '<pre>';
        print_r($request->input());
        echo '</pre>';
        
        echo '<pre>';
        print_r($request->query());
        echo '</pre>';

        //$a = $request->input('a', 0);
        $a = $request->a ?? 15;
        echo $a . '<br />';

        if ($request->has('a')) {
            echo 'yes' . '<br />';
        }

        if ($request->has('q')) echo 'Параметр присутствует <br />';
        else echo 'Парамет отсутствует <br />';

        if ($request->filled('q')) echo 'Параметр присутствует <br />';
        else echo 'Парамет отсутствует <br />';

        return 'request';
    }
}
