<?php


use Illuminate\Support\Facades\Route;
use Psy\Command\WhereamiCommand;

use App\Http\Controllers\MyController;
use App\Http\Controllers\PostController;


Route::get('/', function () {
//    $aboutPageUrl = "/about";


    return view('welcome');
});

// Route::view('/about-us', 'about')->name('about');


//  Route::get('/sum/{num1}/{num2}', function ( float $num1,  float $num2) {
//      return $num1 + $num2;
//  })->whereNumber(['num1', 'num2']);



Route::get('/dashboard', [MyController::class, 'showDashboard']);


