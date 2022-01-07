<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', [UserController::class, 'loginPage']);

Route::get('/register', [UserController::class, 'registerPage']);

Route::post('/loginVerif', [UserController::class, 'loginVerification']);

Route::post('/registerVerif', [UserController::class, 'registerVerification']);

Route::post('/addNewProduct', [ProductController::class, 'productVerification']);

Route::post('/addNewCategory', [CategoryController::class, 'addCategory']);