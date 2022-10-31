<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ReviewController extends Controller
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

    public function getReview() {
        return view('sub.review', ['name' => 'Вася', 'review' => 'Текст отзыва']);
        // // return View::make('sub.review', ['name' => 'Вася', 'review' => 'Текст отзыва для фасада']);
        // return View::exists('sub.review');
    }
}
