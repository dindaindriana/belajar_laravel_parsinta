<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // $users = DB::table('users')->limit(1)->get();
        // $users = DB::table('users')->take(1)->get();
        // $users = DB::table('users')->first();
        // $user = DB::table('users')->first(); return $user->email;
        // $users = DB::table('users')->get()->toArray();
        // $users = DB::table('users')->find(2);
        // $users = DB::table('users')->where('email','dinda@gmail.com')->get();
        $users = DB::table('users')
            ->where('email', 'like', 'indriana%')
            //->latest() //sama dengan ->orderBy('created_at', 'desc')
            
            ->first();

        // return $users;
        dd($users);
    }
}