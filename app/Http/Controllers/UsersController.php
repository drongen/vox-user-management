<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function add()
    {
        return view('users.add');
    }

    public function update($id)
    {
        $user = User::find($id);
        return view('users.update', compact('user'));
    }

    public function store(Requests\UserCreate $request)
    {
        User::create($request->all());
        return view('users.add');
    }

    public function update_user()
    {
        return view('users.add');
    }
}
