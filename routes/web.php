<?php

use App\Http\Controllers\JugadorController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\RolController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\JugadorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('jugadors','JugadorController');
Route::resource('jugadors', JugadorController::class);
Route::resource('juegos', JuegoController::class);
Route::resource('rols', RolController::class);
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');