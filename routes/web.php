<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ManajemenPendudukController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\SettingController;

Route::view('/', 'welcome');

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
});

Route::group(['middleware' => 'user'], function () {
    Route::get('user/dashboard', [HomeController::class, 'dashboard']);
});

Route::resource('kelurahan', KelurahanController::class);

Route::resource('admin/settings', SettingController::class);