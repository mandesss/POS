<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route untuk HomeController
Route::get('/home', [HomeController::class, 'index']);

// Route untuk ProductsController
Route::get('/products', [ProductsController::class, 'index']);

// Route untuk category ProductsController
Route::get('/category/food-beverage', [ProductsController::class, 'showFirstCat']);
Route::get('/category/beauty-health', [ProductsController::class, 'showSecondCat']);
Route::get('/category/home-care', [ProductsController::class, 'showThirdCat']);
Route::get('/category/baby-kid', [ProductsController::class, 'showFourthCat']);


// Route untuk UserController
Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

// Route untuk SalesController
Route::get('/sales', [SalesController::class, 'index']);
