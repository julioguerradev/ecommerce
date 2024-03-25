<?php

use App\Http\Controllers\AdminProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductsController::class, 'show']);

// Admin
Route::get('/admin/products', [AdminProductsController::class, 'index']);
Route::get('/admin/products/edits', [AdminProductsController::class, 'index']);