<?php

use App\Models\Article;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', Controllers\HomeController::class);

Route::get('/about-us', [Controllers\AboutController::class, 'index'])->name('about');

Route::get('/contact', [Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/gallery', [Controllers\GalleryController::class, 'index'])->name('gallery');


Route::resource('users', Controllers\UserController::class)->middleware('auth'); 

Route::get('login',[Controllers\LoginController::class, 'loginForm'])->name('login')->middleware('guest'); //Middleware guest artinya route ini hanya bisa diakses oleh user yang belum login (guest)
Route::post('login', [Controllers\LoginController::class, 'authenticate'])->middleware('guest');

Route::post('logout', Controllers\LogoutController::class)->name('logout')->middleware('auth'); //Middleware auth memastikan hanya user yang sudah login yang bisa akses route ini. 