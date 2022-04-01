<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/products', [ProductController::class, 'index'])->middleware('auth');
Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth');
Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->middleware('auth');
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);
