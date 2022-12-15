<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminprofileController;

//Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landingPage.index');

//Auth Login
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/postlogin', [LoginController::class, 'store'])->name('postlogin.store');
Route::post('/register/post', [RegisterController::class, 'store'])->name('register.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function() {

    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/profile', [AdminprofileController::class, 'index'])->name('admin.profile');
    Route::get('/password', [AdminprofileController::class, 'resetPassword'])->name('admin.password');
});
