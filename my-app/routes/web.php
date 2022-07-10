<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard']);
    Route::get('/login', [App\Http\Controllers\Admin\DashboardController::class, 'login']);
    Route::get('/categories', [App\Http\Controllers\Admin\DashboardController::class, 'categories']);
    Route::get('/papers', [App\Http\Controllers\Admin\DashboardController::class, 'papers']);
    
});