<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Exceptions\MyException;
use App\Exceptions\MyExceptionTwo;

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
        // return response('Тело ответа', 200);
        // return response('Тело ответа с заголовком', 200)->header('a', 1)->header('Content-type', 'text/plain');
        // return response()->json(['a' => 5, 'b' => [6, 2, 3], 'c' => true]);
        // return response()->download('index.php');
        return response()->file('robots.txt');
    }

    public function mypage(Request $request) {

        return view('mypageblade');
    }

    public function clients(Request $request) {
        return view('clients');
    }

    public function clientsLayout(Request $request) {

        if ($request->has('func')) {
            if($request->func == 'add') {
                throw new MyExceptionTwo();
            }
        }

        if (session()->has('cart')) {
            $cart = session()->get('cart');
        }
        return view('childs.clientslayout', ['cartsession' => $cart]);
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

    public function testUrl() {

        echo url()->current() . '<br />';
        echo URL::current() . '<br />';
        echo url()->full() . '<br />';
        echo url()->previous() . '<br />';
        echo route('mypage', ['id' => 15]) . '<br />';
        echo url()->signedRoute('activate', ['id' => 1]) . '<br />';
        echo url()->temporarySignedRoute('activate', now()->addSeconds(10), ['id' => 1]) . '<br />';

        return 1;
    }

    public function activate(Request $request) {
        /*if ($request->hasValidSignature()) {
             return 'Успешная активация ' . $request->id;
        }
        abort(401);*/
        return 'Успешная активация ' . $request->id;
    }

    public function counter(Request $request) {
        // session()->put('c', 10);
        // session(['d' => [1, 2, 3, 4, 5, 6,]]);
        // session()->push('d', 88);
        // echo '<pre>';
        // print_r($request->session()->all());
        // echo '<pre>';

        // echo '-----------<br />';

        // echo '<pre>';
        // print_r(session()->all());
        // echo '<pre>';

        // echo session()->exists('_previous') . '<br />';
        // echo '-----------<br />';
        // echo session()->has('_previous') . '<br />';
        // echo '-----------<br />';
        // print_r(session()->get('d')) . '<br />';

        // echo session()->pull('d');
        // echo '-----------<br />';
        // echo '<pre>';
        // print_r($request->session()->all());
        // echo '<pre>';

        // session()->forget('x');

        // if (session()->exists('counter')) {
        //     $counter = session()->pull('counter');
        //     $counter++;
        //     session()->put('counter', $counter);
        // } else {
        //     session()->put('counter', 1);
        // }
        // echo session()->get('counter') . '<br />';

        /*$counter = session()->get('counter', 0);
        $counter++;
        session()->put('counter', $counter);*/
        // session()->forget('counter');
        session()->increment('counter');

        return session()->get('counter');
    }

    public function testException(Request $request) {
        throw new MyException();
    }

    public function temporarylink() {
        return url()->temporarySignedRoute('download', now()->addSeconds(10)) . '<br />';
    }
}
