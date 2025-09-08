<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->get();
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('users.create');
    }           

    public function store(Request $request)
    {
        User::create($request -> validate([
            'name' => ['required', 'min:3', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]));

        return redirect('/users');
    }

    public function show(User $user)
    {
        // $user = User::findOrFail($id); //findOrFail ini ketika data tidak ditemukanmaka akan muncul 404 secara otomatis, tapi akanlebih simpel kalau kita pakai model binding

        // abort_if(!$user, 404); //ini adalah ketika id tidak ditemukan maka akan 404 not found akan lebih singkat akalau pakai findOrFail
        
        return view('users/show',[
            'user' => $user,
        ]);
    }   
}