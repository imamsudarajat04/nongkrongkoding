<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Test Admin Page
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    return view('layouts.adminlayout');
});


// Test User Page
Route::get('/user', function () {
    return view('layouts.userlayout');
});


// Test Login Page Custom
Route::get('/login', function () {
    return view('auth.master');
});