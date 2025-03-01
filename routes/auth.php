<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;






Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])
        ->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])
        ->name('password.email');
    Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])
        ->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])
        ->name('password.update');
});


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/auth/check', [AuthController::class, 'check'])->name('auth.check');
