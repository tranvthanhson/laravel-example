<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/todos', ['as' => 'todos.index', 'uses' => 'TodoController@index']);
Route::post('/todos', ['as' => 'todos.store', 'uses' => 'TodoController@store']);
