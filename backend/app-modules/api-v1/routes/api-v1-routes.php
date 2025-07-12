<?php

use Estivenm0\ApiV1\Http\Controllers\BookingController;
use Estivenm0\ApiV1\Http\Controllers\CategoryController;
use Estivenm0\ApiV1\Http\Controllers\PackageController;
use Estivenm0\ApiV1\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('/api/v1')->group(function () {
    Route::apiResource('/categories', CategoryController::class)->only('index');

    Route::apiResource('/bookings', BookingController::class)->only('index', 'store')
        ->middleware('auth:api');

    Route::apiResource('/packages', PackageController::class)->only('index', 'show');

    Route::get('/users', [UserController::class, 'show'])
        ->middleware('auth:api');

    Route::match(['put', 'patch'], '/users', [UserController::class, 'update'])
        ->middleware('auth:api');
});