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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/loginPage', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/detailProduct', function () {
    return view('detailProduct');
});
Route::get('/addCategory', function () {
    return view('addCategory');
});
Route::get('/myCart', function () {
    return view('myCart');
});

Route::get('/addProduct', function(){
    return view('registerProduct');
});

Route::get('/login', [UserController::class, 'loginPage']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/register', [UserController::class, 'registerPage']);

Route::post('/loginVerif', [UserController::class, 'loginVerification']);

Route::post('/registerVerif', [UserController::class, 'registerVerification']);

Route::post('/addNewProduct', [ProductController::class, 'productVerification'])->middleware('admin');

Route::post('/addNewCategory', [CategoryController::class, 'addCategory'])->middleware('admin');

Route::post('/searchProduct', [ProductController::class, 'searchItem'])->middleware('user');
