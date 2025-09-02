<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        //return User::get(); //mengambil semua data dengan memanggil model user yang dimana larave otomatis mencari data ke tabel users
        //return User::findMany([1,3]); //mengambil data yang ingin ditampilkan saja seperti 1 dan 3
        //return User::firstWhere('email', 'dinda@gmail.com'); //mengambil data pertama dengan kondisi tertentu
        
        //ini pake mode
        // return User::query()
        //     ->where('email', 'fitria@gmail.com')
        //     ->latest()
        //     ->get();
            // ->map(fn($user) =>[
            //     'email' => $user->email
            // ]); //map() itu semacam filtering/transformasi ulang data biar sesuai kebutuhan

        //ini pake db facades
        // return DB::table('articles')
        //     ->select('title', 'slug', 'id') //menampilkan data yang dibutuhkan
        //     ->get(); //menampilkan semua data

        $users = User::query()->latest()->get();
        return view('users.index', [
            'users' =>$users
        ]);
    }
}