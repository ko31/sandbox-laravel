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

// Route prefixs
Route::prefix('hello')->group(function(){
	Route::get('', 'HelloController@index');
	Route::get('view', 'HelloController@view');
	Route::get('list', 'HelloController@list');
	Route::get('directive', 'HelloController@directive');
	Route::get('child', 'HelloController@child');
});

Route::redirect('book', 'book/list');
Route::get('book/list', 'BookController@list');
Route::get('book/view/{id}', 'BookController@view');
