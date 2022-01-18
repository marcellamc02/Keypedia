<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\KeyboardDetailsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HomeController::class, 'showHome'])->name('home.list');
Route::get('/home', [HomeController::class, 'showHome'])->name('home.list');

Route::get('/category/{categoryId}', [KeyboardController::class, 'showKeyboardCategory']);

Route::get('/detailsKeyboard/{keyboardId}', [KeyboardDetailsController::class, 'showKeyboardDetails']);

Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

Route::post('/register',[RegisterController::class, 'register'])->name('register');
Route::post('/login',[LoginController::class, 'login'])->name('login');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
