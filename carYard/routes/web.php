<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;
use Psy\Command\WhereamiCommand;
use App\Http\Controllers\CarController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/car/search', [CarController::class, 'search'])->name('car.search');

Route::resource('car', CarController::class);

Route::get('/signup', [SignupController::class, 'create'])->name('signup');

Route::get('/login', [LoginController::class, 'create'])->name('login');



