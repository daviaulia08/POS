<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\ProductController;

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class,'food']);
    Route::get('/beauty-health', [ProductController::class,'beauty']);
    Route::get('/home-care', [ProductController::class,'home']);
    Route::get('/baby-kid', [ProductController::class,'baby']);
});

use App\Http\Controllers\UserController;

Route::get('/user/{id}/name/{name}', [UserController::class,'profile']);
