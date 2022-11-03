<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TestBladeController;

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

/*Route::any('/product/{id?}/{comment?}', function(Request $request, $id = 1, $comment = '') {
    return $request->path();
})->whereNumber('id')->where(['comment' => '[a-z]+']);*/

Route::prefix('admin')->group(function() {
    Route::match(['get', 'post'], '/', function() {
        return 'admin.index';
    });
    Route::match(['get', 'post'], '/auth', function() {
        return 'admin.auth';
    })->middleware('throttle:limit_query');
    Route::match(['get', 'post'], '/products', function() {
        return 'admin.products';
    });
    Route::match(['get', 'post'], '/clients', function() {
        return 'admin.clients';
    });
});

/*Route::group(['prefix' => 'admin', 'middleware' => 'throttle:my_limit_query'], function() {
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

Route::get('/feedback', function () {
    return 'feedback';
})->middleware('checklocalhost');

Route::get('/home', [MainController::class, 'home']);
Route::get('/map', [MainController::class, 'map']);
Route::get('/massage/{id?}', [MainController::class, 'massage']);
Route::get('/catalog', MainController::class);

Route::get('/secretpage', function (Request $request) {
    return $request->path();
})->middleware('checkkey');

Route::get('/mypage', [TestController::class, 'mypage']);
// Route::get('/mypageblade', [TestController::class, 'mypage']);
// Route::get('/mypageblade/clients', [TestController::class, 'clients']);
Route::get('/product', [ProductController::class, 'view']);
Route::get('/extendedtemplate', [TestBladeController::class, 'extendedTemplate']);
Route::get('/review', [ReviewController::class, 'getReview']);
Route::get('/testcomponents', [ReviewController::class, 'testComponents']);
Route::get('/testblade', [TestBladeController::class, 'testBlade']);

Route::prefix('mypageblade')->group(function() {
    Route::get('/', [TestController::class, 'mypage']);
    Route::get('/clients', [TestController::class, 'clients']);
    Route::get('/contacts', [TestController::class, 'contacts']);
});
