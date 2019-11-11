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
Route::prefix('hello')->group(function () {
    Route::get('', 'HelloController@index');
    Route::get('view', 'HelloController@view');
    Route::get('list', 'HelloController@list');
    Route::get('directive', 'HelloController@directive');
    Route::get('child', 'HelloController@child');
});

Route::redirect('book', 'book/list');
Route::get('book/list', 'BookController@list');
Route::get('book/view/{id}', 'BookController@view')
    ->name('bookview');

Route::prefix('ctl')->group(function () {
    Route::get('plain', 'CtlController@plain');
    Route::get('html', 'CtlController@html');
    Route::get('tohtml', 'CtlController@tohtml');
    Route::get('togoogle', 'CtlController@togoogle');
    Route::get('toviewbook', 'CtlController@toviewbook');
    Route::get('json', 'CtlController@json');
    Route::get('downloadcsv', 'CtlController@downloadCsv');
    Route::get('request', 'CtlController@request');
	Route::match(['get','post'], 'form', 'CtlController@form');
});
