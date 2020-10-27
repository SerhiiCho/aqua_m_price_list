<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PriceListController;
use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::redirect('/', '/login');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);

    Route::get('price-list', [PriceListController::class, 'index']);
    Route::post('price-list', [PriceListController::class, 'store']);

    Route::get('images', [ImagesController::class, 'index']);
    Route::post('images', [ImagesController::class, 'store']);
});