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



// Route::get('articles/create', function(){
//     Article::create([
//         'title' => $title = 'My firts article',
//         'slug' => str($title)->slug(),
//         'body' => $body = 'This is the body of my first article',
//         'teaser' => $teaser = str($body)->limit(150),
//         'meta_title' => $title,
//         'meta_description' => $teaser

//     ]);
// }); //ini adalah cara manual untuk memasukkan data kedalam database, ketika sudah seperti ini harus didefinisiskan lagi ke dalam modelnya ($fillable)
