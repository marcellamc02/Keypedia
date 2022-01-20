<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransactionDetailController;
use App\Http\Controllers\KeyboardDetailsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CheckoutController;
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
Route::redirect('/', '/home');
Route::get('/home', [HomeController::class, 'showHome'])->name('home.list');
Route::get('/category/{categoryId}', [KeyboardController::class, 'showKeyboardCategory'])->name('showKeyboardCategory');
Route::get('/detailsKeyboard/{keyboardId}', [KeyboardDetailsController::class, 'showKeyboardDetails']);

Route::middleware('manager')->group(function(){
    Route::get('/addKeyboard', [KeyboardController::class, 'showAddKeyboard'])->name('showAddKeyboard');
    Route::post('/addKeyboard', [KeyboardController::class, 'addKeyboard']);
    Route::get('/manageCategories', [KeyboardController::class, 'showManageCategory'])->name('showManageCategory');
    Route::post('/manageCategories/update/{categoryId}', [KeyboardController::class, 'updateCategory']);
    Route::post('/manageCategories/delete/{categoryId}', [KeyboardController::class, 'deleteCategory']);
    Route::get('/updateCategory/{categoryId}', [KeyboardController::class, 'showUpdateCategory']);
    Route::put('/updateCategory/{categoryId}', [KeyboardController::class, 'updateCategory']);
});

Route::middleware('user')->group(function(){
    Route::get('/category/{categoryId}', [KeyboardController::class, 'showKeyboardCategory'])->name('showKeyboardCategory');
    Route::get('/Cart', [CartController::class, 'showCart'])->name('showCart');
    Route::post('/Cart/add/{id}', [CartController::class, 'addToCart']);
    Route::put('/Cart/update/{id}', [CartController::class, 'updateQuantityCart']);
    Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout');
    Route::get('/transactionDetail', [TransactionDetailController::class, 'showTransactionDetail'])->name('showTransactionDetail');
});

Route::get('/delete-category', function(){
    return view('manageCategories');
})->name('manageCategories');

Route::get('/update-category', function(){
    return view('updateCategory');
})->name('updateCategory');

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/search/{categoryId}',[KeyboardController::class,'search'])->name('search');

Route::get('/changePassword',function(){
    return view('changePassword');
});

Route::post('/register',[RegisterController::class, 'register'])->name('register');
Route::post('/login',[LoginController::class, 'login'])->name('login');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
