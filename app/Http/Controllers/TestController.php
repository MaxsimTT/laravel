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
}
