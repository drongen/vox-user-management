<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $name = "Aleks";
    $people = [
        "Aleks" => "Developer",
        "Tina" => "Teacher",
        "Bob" => "Chef"
    ];
    $user = (object)['name' => 'Aleksandar', 'surname' => 'Tufekciev', 'country' => 'Maceodnia'];

    return view('index', compact('name', 'people', 'user'));
});

Route::get('/add-user', function () {
    return view ('users/add');
});

Route::get('/admin', function () {
    return view ('admin/index');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
