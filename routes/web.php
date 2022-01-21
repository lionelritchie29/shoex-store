<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::group(['prefix' => '/auth', 'middleware' => 'guest'], function() {
    Route::get('/register', [AuthController::class, 'showRegisterForm']);
    Route::get('/login', [AuthController::class, 'showLoginForm']);
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::group(['prefix' => '/products'], function() {
    Route::get('/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');
    Route::post('/create', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
    Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/update/{id}', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');
});

Route::group(['prefix' => '/transactions', 'middleware' => 'auth'], function() {
    Route::post('/create', [TransactionController::class, 'create'])->name('transactions.create');
    Route::get('/', [TransactionController::class, 'index'])->name('transactions.list');
    Route::get('/{id}', [TransactionController::class, 'show'])->name('transactions.show');
});