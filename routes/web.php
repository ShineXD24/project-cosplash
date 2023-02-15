<?php
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ArrivalController;
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



Route::get('/login',[loginController::class,'index']);
Route::get('/items', [ItemController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);


route::group(['prefix' => '/login'], function(){
    Route::get('/all', [LoginController:: class, 'index']);
    Route::post('/login', [LoginController:: class, 'login']);
});
// });

route::group(['prefix' => '/register'], function(){
    Route::get('/all', [RegisterController:: class, 'index']);
    Route::post('/create', [RegisterController:: class, 'create']);
    Route::get('/logout',[RegisterController::class,'logout']);
});
