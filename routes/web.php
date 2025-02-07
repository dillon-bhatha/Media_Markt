<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MyController;

Route::get('/', [MyController::class, 'index']);

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
