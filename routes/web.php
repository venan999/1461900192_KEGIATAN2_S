<?php
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WhereController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\JoinWhereController;
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
    return view('index_0192');
});

Route::get('/select', function () {
    return view('select');
});

Route::get('/where', function () {
    return view('where');
});

Route::get('/join', function () {
    return view('join');
});

Route::get('/joinwhere', function () {
    return view('joinwhere');
});
Route::resource('/select', SiswaController::class);
Route::resource('/where', WhereController::class);
Route::resource('/join', JoinController::class);
Route::resource('/joinwhere', JoinWhereController::class);
