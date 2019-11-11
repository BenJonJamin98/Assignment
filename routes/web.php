<?php

use Illuminate\Support\Facades\Route;

Route::get('/log in','AuthController@index');
Route::post('/login', 'AuthController@store')->name('login');
Route::get('/main', 'AuthController@show');
//Route::get('login/logout', 'AuthController@destroy');
Route::get('/','CommentController@index');

