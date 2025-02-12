<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AgeCheck;


Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});


// Route::get('/user/{name}', function ($name) { 
//     return view('about', compact('name')); 
// });

Route::get('adduser', [UserController::class, 'view']);
Route::post('adduser', [UserController::class, 'index']);

Route::view('url', 'url');

//Route with Prefix

Route::prefix('student')->group(function () {
    Route::view('/home', 'home2');
    Route::get('/show', [HomeController::class, 'show']);
    Route::get('/add', [HomeController::class, 'add']);
});

//Note: Double prefix can be used as well


//Route with Controller

Route::controller(StudentController::class)->group(function () {
    Route::get('show', 'show');
    Route::get('add',  'add');
    Route::get('delete', 'delete');
    Route::get('about/{name}', 'about');
});

//Middleware Route
Route::view('age', 'age');

//Middleware  Group

Route::view('middleware1', 'middleware1')->middleware('check');
Route::view('middleware2', 'middleware2')->middleware('check');



Route::middleware('check')->group(function () {
    Route::view('list', 'list');
    Route::view('contact', 'contact');
    Route::view('service', 'service');
    Route::view('blog', 'blog');
});


//Specific route middleware

Route::view('middleware4','middleware4')->middleware(AgeCheck::class);