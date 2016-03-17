<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function(){
        return view('index');
    });

    Route::group(['middleware' => ['role:super_admin']], function () {
        Route::get('/user', 'UsersController@index');
        Route::get('/user/add', 'UsersController@add');
        Route::get('/user/update/{id}', 'UsersController@update');
        Route::post('/user/store', 'UsersController@store');
        Route::post('/user/update_user/{id}', 'UsersController@update_user');
        Route::get('/user/get_users/', 'UsersController@get_users');
    });

    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/home/user-cars/{user}', 'HomeController@list_cars');
});

//Route::group(['middleware' => 'web'], function () {
//    Route::auth();
//
//    Route::get('/home', 'HomeController@index');
//});
