<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TestBladeController;
use App\Http\Controllers\TestGroupController;
use App\Http\Controllers\PostController;


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

Route::get('/mypage', [TestController::class, 'mypage'])->name('mypage');
// Route::get('/mypageblade', [TestController::class, 'mypage']);
// Route::get('/mypageblade/clients', [TestController::class, 'clients']);
Route::get('/product', [ProductController::class, 'view']);
Route::get('/extendedtemplate', [TestBladeController::class, 'extendedTemplate']);
Route::get('/review', [ReviewController::class, 'getReview']);
Route::get('/testcomponents', [ReviewController::class, 'testComponents']);
Route::get('/testblade', [TestBladeController::class, 'testBlade']);

Route::prefix('mypageblade')->group(function() {
    Route::get('/', [TestController::class, 'mypage']);
    Route::get('/clients', [TestController::class, 'clients'])->name('clients');
    Route::get('/clientslayout', [TestController::class, 'clientsLayout']);
    Route::get('/contacts', [TestController::class, 'contacts']);
    Route::get('/contactslayout', [TestController::class, 'contactsLayout']);
});

Route::get('/testlayout', [TestController::class, 'testLayout']);
Route::get('/testlayoutcomp', [TestController::class, 'testlayoutcomp']);

Route::prefix('mylayout')->group(function() {
    Route::get('/clients', [TestController::class, 'clientsLayout']);
    Route::get('/contacts', [TestController::class, 'contactsLayout']);
});

Route::get('/request', [TestController::class, 'requestMethod']);
Route::get('/response', TestController::class);

Route::get('/requesttest', [ProductController::class, 'requestTest']);
Route::get('/responsetest', [ProductController::class, 'respotseTest']);
Route::get('/download', [ProductController::class, 'download'])->middleware('signed')->name('download');
Route::get('/testurl', [TestController::class, 'testUrl']);
Route::get('/activate', [TestController::class, 'activate'])->middleware('signed')->name('activate');
Route::get('/counter', [TestController::class, 'counter'])->name('counter');
Route::get('/testexception', [TestController::class, 'testException'])->name('testException');

Route::get('/temporarylink', [TestController::class, 'temporaryLink'])->name('temporaryLinkDownloadFile');
Route::get('/my_channel_logs', [TestController::class, 'myChannelLog'])->name('test_my_channel_log');

Route::controller(TestGroupController::class)->group(function () {
    Route::get('/testgroupcontrollerone', 'viewone');
    Route::get('/testgroupcontrollertwo', 'viewtwo');
    Route::get('/testgroupcontrollerthree', 'viewthree');
});

Route::get('/posts', [PostController::class, 'getPosts'])->name('posts');
