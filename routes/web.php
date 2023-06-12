<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\GaurantorController;
use App\Http\Controllers\CustomerController;


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
    return view('index');
});

Route::get('city/read', [CityController::class, 'index'])->name('index');
Route::get('customer/read', [CustomerController::class, 'index']);
Route::get('product/read', [ProductController::class, 'index']);
Route::get('gaurantor/read', [GaurantorController::class, 'index']);
Route::get('purchase/create', [PurchaseController::class, 'create'])->name('create');
Route::post('customer_product/store',[PurchaseController::class, 'store'])->name('store');