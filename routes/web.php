<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authenticating']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::controller(Home::class)->group(function () {
    Route::get('/pengunjung', 'index');
    Route::post('/pengunjung', 'store');
});

Route::get('dashboard', function () {
    return view('dashboard');
});
