<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/blank', 'blank')->name('blank');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
