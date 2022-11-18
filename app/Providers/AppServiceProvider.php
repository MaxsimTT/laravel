<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use App\View\Composers\ExampleComposer;
use App\View\Composers\MyPageComposer;
use App\View\Composers\ClientsComposer;
use DB;

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

        DB::listen(function ($query) {
            dump($query->sql);
            dump($query->bindings);
        });

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
            ['mypage', 'cart', 'childs.clientslayout'],
            MyPageComposer::class
        );

        Blade::directive('importantmessage', function($param) {
            return "<?php echo '<b>$param</b>' ?>";
        });

        Blade::directive('mycurrency', function($currency) {
            if ($currency == 'rub') {
                return "<?php echo '<b>500 руб.</b>' ?>";
            } if ($currency == 'usd') {
                return "<?php echo '<b>\$500</b>' ?>";
            } else {
                return;
            }
        });

        View::composer(
            ['mypageblade', 'clients', 'contacts', 'childs.clientslayout'],
            ClientsComposer::class
        );
    }
}
