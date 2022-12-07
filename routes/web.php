<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LandingPageController;

//Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landingPage.index');

//Auth Login
Route::get('/login', [LoginController::class, 'index'])->name('login.index');

//Testing Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// Route::group(['middleware' => ['auth']], function() {

//     //Dashboard
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// });
Route::get('/registrasi', [RegisterController::class, 'index'])->name('register.index');