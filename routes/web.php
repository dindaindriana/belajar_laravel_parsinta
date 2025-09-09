<?php

use App\Models\Article;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', Controllers\HomeController::class);

Route::get('/about-us', [Controllers\AboutController::class, 'index'])->name('about');

Route::get('/contact', [Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/gallery', [Controllers\GalleryController::class, 'index'])->name('gallery');


// Route::get('/users', [Controllers\UserController::class, 'index'])->name('users.index');

// Route::get('/users/create', [Controllers\UserController::class, 'create'])->name('users.create');

// Route::post('/users', [Controllers\UserController::class, 'store'])->name('users.store');

// Route::get('/users/{user:id}', [Controllers\UserController::class, 'show'])->name('users.show');

// Route::get('/users/{user:id}/edit', [Controllers\UserController::class, 'edit'])->name('users.edit');

// Route::put('/users/{user:id}', [Controllers\UserController::class, 'update'])->name('users.update');

// Route::delete('/users/{user:id}', [Controllers\UserController::class, 'destroy'])->name('users.destroy');

Route::resource('users', Controllers\UserController::class); // dengan menggunakan route recourse Laravel otomatis bikin 7 route CRUD standar seperti Route::get, Route::post, dll. Jadi tidak perlu define route satu-satu seperti diatas.
//  ->except(['show', 'destroy']); //dengan menggunakan except Laravel tetap membuat semua route resourceful kecuali show dan destroy. except berarti pengecualian

// Route::apiResource('users', Controllers\UserController::class); // ada juga apiResource  yang dimana Digunakan untuk REST API (tanpa Blade view) dan membuat hanya 5 route (tanpa create dan edit)