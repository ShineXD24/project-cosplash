<?php
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

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
    return view('login.index');
});

Route::get('/shop', [ShopController::class, 'index'])->middleware('auth');

Route::get('/home', function () {
    return view('home.app');
})->middleware('auth');

Route::get('/reviews', function () {
    return view('review.index');
})->middleware('auth');

Route::get('/detail', function () {
    return view('detail.index');
})->middleware('auth');


Route::get('/payment', function () {
    return view('payment.all');
})->middleware('auth');


route::group(['prefix' => '/login'], function(){
    Route::get('/all', [loginController:: class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [loginController:: class, 'login']);
})->middleware('auth');

route::group(['prefix' => '/register'], function(){
    Route::get('/all', [RegisterController:: class, 'index'])->middleware('guest');
    Route::post('/create', [RegisterController:: class, 'create']);
    Route::get('/logout',[RegisterController::class,'logout']);
});

