<?php

use Estivenm0\Auth\Http\Controllers\AuthenticatedSessionController;
use Estivenm0\Auth\Http\Controllers\EmailVerificationNotificationController;
use Estivenm0\Auth\Http\Controllers\NewPasswordController;
use Estivenm0\Auth\Http\Controllers\PasswordResetLinkController;
use Estivenm0\Auth\Http\Controllers\RegisteredUserController;
use Estivenm0\Auth\Http\Controllers\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::post('/login', [AuthenticatedSessionController::class, 'store']);

    // Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    //                 ->middleware('guest')
    //                 ->name('password.email');

    // Route::post('/reset-password', [NewPasswordController::class, 'store'])
    //                 ->middleware('guest')
    //                 ->name('password.store');

    // Route::get('/verify-email/{id}/{hash}', VerifyEmailController::class)
    //                 ->middleware(['auth', 'signed', 'throttle:6,1'])
    //                 ->name('verification.verify');

    // Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //                 ->middleware(['auth', 'throttle:6,1'])
    //                 ->name('verification.send');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth:api')
        ->name('logout');
})->middleware('api');
