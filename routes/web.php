<?php
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
// Route::get('/l', [FavoritController::class, 'index']);

// Route::get('/', function() {
//     $arrival = new ArrivalController;
//     // $favorit = new FavoritController;

//     $data1 = $arrival->index();
//     // $data2 = $favorit->index();


route::group(['prefix' => '/login'], function(){
    Route::get('/all', [LoginController:: class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController:: class, 'login']);
});
// });
Route::get('/reviews', [ReviewController::class, 'index']);

route::group(['prefix' => '/register'], function(){
    Route::get('/all', [RegisterController:: class, 'index'])->middleware('guest');
    Route::post('/create', [RegisterController:: class, 'create']);
    Route::get('/logout',[RegisterController::class,'logout']);
});
