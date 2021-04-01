<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BasketController;
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

Route::get('/', [MainController::class, 'welcome']);
Route::get('/basket', [BasketController::class, 'basket']);
Route::get('/order', [BasketController::class, 'order']);
Route::post('basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');
Route::get('/{category}', [MainController::class, 'category']);
