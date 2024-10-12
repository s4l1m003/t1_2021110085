<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
Route::resource('products', ProductController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
