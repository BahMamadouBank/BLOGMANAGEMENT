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
   
   Route::get('/adds','CategorieController@create');
   Route::post('/adds','CategorieController@store');

   Route::get('/index','CategorieController@index');

   Route::get('/show/{id}','CategorieController@show');

   Route::get('/edit/{id}','CategorieController@edit');
   Route::post('/edit/{id}','CategorieController@update');

   Route::get('/destroy/{id}','CategorieController@destroy');

   //Article's Management

   Route::get('/pd-adds','ProduitsController@create');
   Route::post('/pd-adds','ProduitsController@store');

   Route::get('/pd-index','ProduitsController@index');

   Route::get('/pd-show/{id}','ProduitsController@show');

   Route::get('/pd-edit/{id}','ProduitsController@edit');
   Route::post('/pd-edit/{id}','ProduitsController@update');

   Route::get('/pd-destroy/{id}','ProduitsController@destroy');


   
   Route::get('/comment-adds','CommentController@create');
   Route::post('/comment-adds','CommentController@store');

   Route::get('/comment-index','CommentController@index');

   Route::get('/comment-show/{id}','CommentController@show');

   Route::get('/comment-edit/{id}','CommentController@edit');
   Route::post('/comment-edit/{id}','CommentController@update');

   Route::get('/comment-destroy/{id}','CommentController@destroy');

   Route::get('/home', 'CategorieController@index')->name('home');

   Route::get('/login', 'Auth\LoginController@getLogin')->name('login');
   Route::post('/login', 'Auth\LoginController@postLogin')->name('login');
   Route::get('/register', 'Auth\LoginController@getRegister')->name('register');
   Route::post('/register', 'Auth\LoginController@postRegister')->name('register');

   Route::get('/logout', 'Auth\LoginController@getLogout')->name('logout');
   Route::get('/create', 'UsersController@index');
   Route::post('/save', 'UsersController@store');
   Route::get('/show', 'UsersController@list');
