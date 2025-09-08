<?php

use App\Models\Article;

// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController; 
// jika menggunakan cara ini kita harus terus terusan mendefinisikan controller

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

//Beberapa cara routing

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('/', 'home'); 

Route::get('/', Controllers\HomeController::class);

Route::get('/about', [Controllers\AboutController::class, 'index']);

Route::get('/contact', [Controllers\ContactController::class, 'index']);

Route::get('/gallery', [Controllers\GalleryController::class, 'index']);

Route::get('/users', [Controllers\UserController::class, 'index']);

Route::get('/users/create', [Controllers\UserController::class, 'create']);

Route::post('/users', [Controllers\UserController::class, 'store']);

Route::get('/users/{user}', [Controllers\UserController::class, 'show']);
