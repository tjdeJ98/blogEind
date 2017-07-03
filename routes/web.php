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

Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function() {
    Route::post('/post/create','PostController@store');
    Route::get('/post/create' ,'PostController@create')->name('createpost');
});

Route::get('/post/{id}','PostController@show')->name('showpost');

Auth::routes();

//Tj