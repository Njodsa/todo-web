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

Route::auth();

Route::get('/', 'TodoController@index')->name('todo.index');
Route::post('/store', 'TodoController@store')->name('todo.store');
Route::get('/edit/{id}', 'TodoController@edit')->name('todo.edit');
Route::put('/update/{id}', 'TodoController@update')->name('todo.update');
Route::delete('/delete/{id}', 'TodoController@destroy')->name('todo.delete');
Route::get('/create', 'TodoController@create')->name('todo.create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
