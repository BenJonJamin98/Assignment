<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//Auth::routes(); // Setting up the authentication for the site
//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/login','AuthController@index');
//Route::post('/login', 'AuthController@store')->name('login');
//Route::get('/main', 'AuthController@show');
//Route::get('login/logout', 'AuthController@destroy');
Route::get('/','CommentController@index');
Route::get('/comment/{comment}/like/', 'LikesController@likePl');
Route::get('/comment/{comment}/dislike/', 'DislikesController@dislikePl');
