<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});


// Route::get('/user/{name}', function ($name) { 
//     return view('about', compact('name')); 
// });

Route::get('adduser',[UserController::class,'view']);
Route::post('adduser',[UserController::class,'index']);

Route::view('url','url');

Route::prefix('student')->group(function(){
    Route::view('/home','home2');
    Route::get('/show',[HomeController::class,'show']);
    Route::get('/add',[HomeController::class,'add']);
});

//Note: Double prefix can be used as well