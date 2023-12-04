<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

//route admin
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

Route::resource('admin/product', ProductController::class);

Route::put('/admin/product/stock-update/{product}', [ProductController::class, 'addStock'])->name('product.updateStock');
Route::get('/admin/product/stock-add/{product}', [ProductController::class, 'showAddStock'])->name('product.showAddStock');

Route::resource('admin/article', ArticleController::class);

Route::resource('admin/order', OrderController::class);

//route pengguna
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/service-buy', function () {
    return view('servicebuy');
})->name('service-buy');
