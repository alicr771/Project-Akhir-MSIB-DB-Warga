<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManajemenPendudukController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::view('/blank', 'blank')->name('blank');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Login
Route::get('/login', [LoginController::class, 'login'])->name('login'); // Display login form
Route::post('/login', [LoginController::class, 'login_proses'])->name('login_proses'); // Process login form submission

// Forgot
Route::get('/forgot', [ForgotPasswordController::class, 'forgot'])->name('forgot'); // Display forgot password form
Route::post('/forgot/proses', [ForgotPasswordController::class, 'forgot_proses'])->name('forgot_proses'); // Process forgot password form

// Reset 
Route::get('/reset/{token}', [ResetPasswordController::class, 'getReset'])->name('getReset'); // Display reset password form
Route::post('/reset_post/{token}', [ResetPasswordController::class, 'postReset'])->name('postReset'); // Process reset password form

// Logout 
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Profile
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::get('/profile/edit-password', [UserController::class, 'editPassword'])->name('profile.editPassword');
    Route::put('/profile/update-password', [UserController::class, 'updatePassword'])->name('profile.updatePassword');
    Route::delete('/profile/delete-account', [UserController::class, 'deleteAccount'])->name('profile.deleteAccount');
});

// Admin 
Route::middleware(['admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'dashboard']);
    Route::resource('/admin/user', UserController::class);
    Route::put('/admin/user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/admin/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    
});

// Staff 
Route::middleware(['user'])->group(function () {
    Route::get('user/dashboard', [HomeController::class, 'dashboard']);
});

Route::view('/forgot-password', 'auth.forgot-password')->name('forgot.password');
Route::view('/reset-password', 'auth.reset-password')->name('reset.password');
Route::get('/tampilpenduduk', [ManajemenPendudukController::class, 'index'])->name('tampilpenduduk');
Route::get('/penduduk/create', [ManajemenPendudukController::class, 'create'])->name('penduduk.create');
Route::post('/penduduk', [ManajemenPendudukController::class, 'store'])->name('penduduk.store');
