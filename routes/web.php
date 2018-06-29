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
    return view('welcome',['website'=>'Laravel学院']);
});
Route::get('user/{id}', 'UserController@show');

Route::get('quote','UserController@quote');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('newsroom', 'newsroom');
