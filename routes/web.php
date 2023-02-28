<?php

use App\Http\Controllers\ArrivalController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\FavoritController;
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


Route::get('/', [ArrivalController::class, 'index']);
// Route::get('/l', [FavoritController::class, 'index']);

// Route::get('/', function() {
//     $arrival = new ArrivalController;
//     // $favorit = new FavoritController;

//     $data1 = $arrival->index();
//     // $data2 = $favorit->index();

//     return view('home.app', ['data_arrival' => $data1]);
// });

// Route::get('/shop', function () {
//     return view('shop.index');
// });

Route::get('/payment', function () {
    return view('payment.all');
});

Route::get('/shop', [ShopController::class, 'index']);