<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ManajemenPendudukController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

// Route::view('/', 'welcome');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::view('/blank', 'blank')->name('blank');
Route::get('/home', [HomeController::class, 'index'])->name('home');

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/proses', [LoginController::class, 'login_proses'])->name('login_proses');

//forgot
Route::get('/forgot', [ForgotPasswordController::class, 'forgot'])->name('forgot');
Route::post('/forgot/proses', [ForgotPasswordController::class, 'forgot_proses'])->name('forgot_proses');

//reset
Route::get('/reset/{token}', [ResetPasswordController::class, 'getReset'])->name('getReset');
Route::post('/reset_post/{token}', [ResetPasswordController::class, 'postReset'])->name('postReset');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [HomeController::class, 'dashboard']);
    Route::resource('/admin/user', UserController::class);
    Route::put('/admin/user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/admin/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});

Route::group(['middleware' => 'user'], function () {
    Route::get('user/dashboard', [HomeController::class, 'dashboard']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/forgot-password', 'auth.forgot-password')->name('forgot.password');

Route::view('/reset-password', 'auth.reset-password')->name('reset.password');
Route::get('/tampilpenduduk', [ManajemenPendudukController::class, 'index'])->name('tampilpenduduk');

Route::get('/penduduk/create', [ManajemenPendudukController::class, 'create'])->name('penduduk.create');
Route::post('/penduduk', [ManajemenPendudukController::class, 'store'])->name('penduduk.store');
