<?php

use Illuminate\Support\Facades\Route;

// Prefix App Controller
!defined('APP_PATH') && define('APP_PATH',config('controller.app_path'));

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Guarded Route
Route::middleware('block.app.access')->group(function() {
    // Home Path
    Route::get('/', APP_PATH . Dashboard\DashboardController::class)->name('dashboard.view');
});

// Auth Path
Route::middleware('block.auth.access')->prefix('auth')->group(function() {
    // Login Main View
    Route::get('/', APP_PATH . Auth\Login\LoginController::class)->name('auth.login.view');
    // Registration Main View
    Route::get('registration', APP_PATH . Auth\Registration\RegistrationController::class)->name('auth.registration.view');
    // Registration Create Function
    Route::post('registration',[APP_PATH . Auth\Registration\RegistrationController::class,'establish'])->name('auth.registration.establish');
    // Login Function
    Route::post('step-in',[APP_PATH . Auth\Login\LoginController::class,'stepIn'])->name('auth.login.step-in');
    // Logout Function
    Route::get('step-out', APP_PATH . Auth\Logout\LogoutController::class)->name('auth.logout.step-out');
});

