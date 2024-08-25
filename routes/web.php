<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/search', [ProductController::class, 'search']);
Route::post('/product/search', [ProductController::class, 'search']);
Route::get('/product/edit/{id?}', [ProductController::class, 'edit']);
Route::post('/product/update', [ProductController::class, 'update']);
Route::post('/product/insert', [ProductController::class, 'insert']);
Route::get('/product/remove/{id}', [ProductController::class, 'remove']);
