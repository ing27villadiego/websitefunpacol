<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('ciudades/{slug}/{id}', ['as' => 'city', 'uses' => 'Process\CityController@city']);

Route::get('sign-up', ['as' => 'sign_up', 'uses' => 'Process\UsersController@signUp']);

Route::post('sign-up', ['as' => 'register', 'uses' => 'Process\UsersController@register']);

Route::post('sign-in', ['as' => 'login', 'uses' => 'Process\UsersController@login']);