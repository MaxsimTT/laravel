<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function(Request $request) {
    return $request->path();
});

Route::post('/products', function(Request $request) {
    return $request->path();
});

Route::any('/product/{id?}/{comment?}', function(Request $request, $id = 1, $comment = '') {
    return $request->path();
})->whereNumber('id')->where(['comment' => '[a-z]+']);

/*Route::prefix('admin')->group(function() {
    Route::match(['get', 'post'], '/', function() {
        return 'admin.index';
    });
    Route::match(['get', 'post'], '/auth', function() {
        return 'admin.auth';
    });
    Route::match(['get', 'post'], '/products', function() {
        return 'admin.products';
    });
    Route::match(['get', 'post'], '/clients', function() {
        return 'admin.clients';
    });
});*/

Route::group(['prefix' => 'admin', 'middleware' => 'throttle:my_limit_query'], function() {
    Route::match(['get', 'post'], '/', function() {
        return 'admin.index';
    });
    Route::match(['get', 'post'], '/auth', function() {
        return 'admin.auth';
    });
    Route::match(['get', 'post'], '/products', function() {
        return 'admin.products';
    });
    Route::match(['get', 'post'], '/clients', function() {
        return 'admin.clients';
    });
});

Route::get('/feedback', function () {
    return 'feedback';
})->middleware('checklocalhost');
