<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\AdminprofileController;
use App\Http\Controllers\Admin\VideoController;

//Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landingPage.index');

//Auth Login
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/postlogin', [LoginController::class, 'store'])->name('postlogin.store');
Route::post('/register/post', [RegisterController::class, 'store'])->name('register.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function() {

    //Dashboard & Settings(Admin)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/profile', [AdminprofileController::class, 'index'])->name('admin.profile');
    Route::put('/updateProfile/{id}', [AdminprofileController::class, 'updateProfile'])->name('admin.updateProfile');
    Route::get('/password', [AdminprofileController::class, 'resetPassword'])->name('admin.password');
    Route::put('/password/{id}', [AdminprofileController::class, 'updatePassword'])->name('admin.updatePassword');

    //Hak Akses
    Route::resource('/hak-akses', PermissionController::class);

    //Video
    Route::get('/video/category', [VideoController::class, 'index'])->name('video.index');

});
