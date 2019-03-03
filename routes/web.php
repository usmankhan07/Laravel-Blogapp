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

Route::get('/index','PagesController@index');
Route::get('/home','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/signup','PagesController@signup');
Route::get('/login','PagesController@login');

// Route::get('/posts', 'PostController@index');
// Route::get('/posts/{id}', 'PostController@show');
// Route::get('/posts/create', 'PostController@create');
Route::resources(['posts'=>'PostController']);