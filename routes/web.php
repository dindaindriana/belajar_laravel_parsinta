<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController; 
// jika menggunakan cara ini kita harus terus terusan mendefinisikan controller

use App\Http\Controllers;

//Beberapa cara routing

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('/', 'home'); 

Route::get('/', Controllers\HomeController::class);

Route::get('/about', [Controllers\AboutController::class, 'index']);

Route::get('/contact', [Controllers\ContactController::class, 'index']);

Route::get('/gallery', [Controllers\GalleryController::class, 'index']);
