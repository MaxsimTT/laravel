<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\View\Composers\ExampleComposer;
use App\View\Composers\MyPageComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('cart', 235425);
        /*View::composer('sub.review', function($view) {
            $view->with('data_of_composer', 'Привет из компоновщика');
        });*/
        // View::composer('sub.review', ExampleComposer::class);
        View::composer(
            ['sub.review', 'product'],
            ExampleComposer::class
        );
        View::composer(
            ['mypage', 'cart'],
            MyPageComposer::class
        );
    }
}
