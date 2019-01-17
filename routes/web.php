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
})->middleware('guest');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**********************Start Category**********************************/

Route::get('category','CategoryController@index')->name('category.index');
Route::post('category/store','CategoryController@store')->name('category.store');

Route::delete('category/{id}/delete','CategoryController@destroy')->name('category.delete');



/**********************End Category**********************************/

/********************Start Post*************************************/

Route::get('post','PostController@index')->name('post.index');

Route::get('post/create','PostController@create')->name('post.create');
Route::post('post/store','PostController@store')->name('post.store');

Route::get('post/{id}/edit','PostController@edit')->name('post.edit');
Route::post('post/{id}/store','PostController@update')->name('post.update');

Route::get('post/{id}/show','PostController@show')->name('post.show');
Route::delete('post/{id}/delete','PostController@destroy')->name('post.delete');


/**********************End Post************************************/