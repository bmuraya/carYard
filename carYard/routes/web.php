<?php

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use Psy\Command\WhereamiCommand;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about', 'about')->name('about');




