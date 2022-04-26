<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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


Route::middleware('auth')
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::resource('/users', UserController::class);
    });

Route::controller(AuthController::class)
    ->middleware('guest')
    ->group(function () {
        Route::post('/login', 'login')->name('login')->middleware('guest');
        Route::delete('/logout', 'logout')->name('logout')->middleware('auth');
    });


Route::inertia('/login', 'Auth/Login');


// Images

Route::get('/img/{path}', [ImagesController::class, 'show'])
    ->where('path', '.*')
    ->name('image');
