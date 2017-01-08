<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    //return 'HALO SELAMAT DATANG DI INFO';

});
//Route::get('/post','PostController@create')->name('post.create');
//Route::post('/post','PostController@store')->name('post.store');

Route::group(['middleware' => 'auth'], function () {
Route::resource('form','FormController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


