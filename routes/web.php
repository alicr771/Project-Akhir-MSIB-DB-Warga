<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/forgot-password', 'auth.forgot-password')->name('forgot.password');

Route::view('/reset-password', 'auth.reset-password')->name('reset.password');
