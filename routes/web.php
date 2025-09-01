<?php

use Illuminate\Support\Facades\Route;

//Beberapa cara routing

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('/', 'home'); 

Route::get('/', fn() => view('home'));
Route::get('/about', fn() => view('about'));
Route::get('/contact', fn() => view('contact'));
Route::get('/gallery', fn() => view('gallery'));

Route::get('users', function(){

    // return [
    //     ['id' => 1, 'name' => 'Dinda'],
    //     ['id' => 1, 'name' => 'Dinda indriana'],
    // ];

    $users = [
        ['id' => 1, 'name' => 'Dinda', 'email' => 'dinda@gmail.com'],
        ['id' => 1, 'name' => 'Dinda indriana', 'email' => 'dindaindriana@gmail.com'],
    ];

    return view('users.index', compact('users'));
});