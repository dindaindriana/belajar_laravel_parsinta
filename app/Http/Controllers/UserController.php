<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Stub\ReturnSelf;

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
        return view('users.form',[
            'user' => new User(),
            'page_meta' => [
                'title' => 'Create new user',
                'method' => 'post',
                'url' => '/users',
                'submit_text' => 'Create'
            ]
        ]);
    }           

    public function store(UserRequest $request)
    {
        User::create($request -> validated());

        return redirect('/users');
    }

    public function show(User $user)
    {
        return view('users.show',[
            'user' => $user,
        ]);
    } 

    public function edit(User $user)
    {
        return view('users.form',[
            'user' => $user,
            'page_meta' => [
                'title' => 'Edit user: ' . $user->name,
                'method' => 'put',
                'url' => '/users/' . $user->id,
                'submit_text' => 'Update',
            ]
        ]);
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request -> validated());

        return redirect('/users');
    }

    // protected function requestValidated(): array //buat funtion ini agar tidak ada pengulangan, jadi pada funtiion update dan store tinggal panggil saja
    // {
    //     return 
    // } //function ini di hapus karna sudah membuat UserRequest sendiri
}