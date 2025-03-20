<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MyController;

Route::get('/', [MyController::class, 'index']);

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);

Route::get('/products', [ProductController::class, 'showProducts'])->name('products.index');

Route::post('/update-rating/{product}', [ProductController::class, 'updateRating']);

Route::get('/user', function () {
    return view('user');
})->name('user.page');
