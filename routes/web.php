<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\AdminprofileController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\JabatanController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\User\HomeController;

Route::get('generate', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
});

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

    //Hak-akses
    Route::resource('/hak-akses', PermissionController::class);

    //Video-category
    Route::resource('/video/category', CategoryController::class);

    //Pengguna
    Route::resource('/data/pengguna', PenggunaController::class);
    Route::get('getRole', [PenggunaController::class, 'getRole'])->name('getRole');

    //Adminn
    Route::resource('/data/admin', AdminController::class);

    //Jabatann
    Route::resource('/jabatan', JabatanController::class);

    //Video
    Route::resource('/video', VideoController::class);
});
