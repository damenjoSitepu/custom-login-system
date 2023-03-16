<?php

use Illuminate\Support\Facades\Route;

// Prefix App Controller
define('APP_PATH',config('controller.app_path'));

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

// Auth Path
Route::prefix('auth')->group(function() {
    // Login Main View
    Route::get('/', APP_PATH . Auth\Login\LoginController::class)->name('auth.login.view');
    // Registration Main View
    Route::get('/registration', APP_PATH . Auth\Registration\RegistrationController::class)->name('auth.registration.view');
});

