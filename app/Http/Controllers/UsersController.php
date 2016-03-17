<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

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
        User::create($request->all())->attachRole(Role::USER);
        return redirect('user/');
    }

    public function update_user()
    {
        return redirect('user/');
    }

    public function get_users()
    {
        return \Datatables::of(User::with('roles')->get())
            ->addColumn('country', 'Macedonia')
            ->editColumn('name', function($data) {
                return strtoupper($data->name);
            })->editColumn('role', function($data) {
                return ($data->roles->first()->display_name);
            })
            ->make(true);
    }
}
