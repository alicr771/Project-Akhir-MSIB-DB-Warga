<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\CommunityUnitController;
use App\Http\Controllers\ResidentMigrationController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\FamilyCardController;
use App\Http\Controllers\FamilyCardDetailController;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::view('/blank', 'blank')->name('blank');

// Login
Route::get('/login', [LoginController::class, 'login'])->name('login'); 
Route::post('/login', [LoginController::class, 'login_proses'])->name('login_proses');

// Forgot
Route::get('/forgot', [ForgotPasswordController::class, 'forgot'])->name('forgot'); 
Route::post('/forgot/proses', [ForgotPasswordController::class, 'forgot_proses'])->name('forgot_proses'); 

// Reset 
Route::get('/reset/{token}', [ResetPasswordController::class, 'getReset'])->name('getReset'); 
Route::post('/reset_post/{token}', [ResetPasswordController::class, 'postReset'])->name('postReset'); 

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

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('home');
    Route::resource('admin/user', UserController::class);
    Route::resource('admin/resident', ResidentController::class);
    Route::resource('admin/resident-migration', ResidentMigrationController::class);
    Route::resource('admin/neighborhood', NeighborhoodController::class);
    Route::resource('admin/community-unit', CommunityUnitController::class);
    Route::resource('admin/kelurahan', KelurahanController::class);
    Route::resource('admin/family', FamilyCardController::class);
    Route::resource('admin/family/detail', FamilyCardDetailController::class);
    Route::resource('admin/document', DocumentController::class);
    Route::resource('admin/generals', GeneralController::class);
    Route::resource('admin/settings', SettingController::class); 
});

Route::group(['middleware' => 'user'], function () {
    Route::get('user/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('user/generals', [GeneralController::class, 'general']);
});

Route::view('/forgot-password', 'auth.forgot-password')->name('forgot.password');

Route::view('/reset-password', 'auth.reset-password')->name('reset.password');
Route::view('/forgot-password', 'auth.forgot-password')->name('forgot.password');
Route::view('/reset-password', 'auth.reset-password')->name('reset.password');