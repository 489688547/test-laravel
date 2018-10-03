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

Route::get('/', 'StaticPagesController@home') -> name('home');

Route::get('/login', 'UsersController@showLogin') -> name('login');

Route::post('/login', 'UsersController@login');

Route::get('/users/{user}', 'UsersController@show')->name('profile');

Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
