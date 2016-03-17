<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Auth::user()->cars;
        return view('home', ['cars' => $cars]);
    }

    public function list_cars(User $user)
    {
        $cars = $user->cars;

        return view('list_cars', ['user' => $user, 'cars' => $cars]);
    }
}
