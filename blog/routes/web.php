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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::group(['prefix'=>'/'], function () {
	Route::get('/', 'TestController@index')
		->name('test.index');
	Route::post('/', 'TestController@postIndex')
		->name('test.post');
	Route::get('test', 'TestController@test')
		->name('test.test');
	Route::get('redirect', 'TestController@testRedirect')
		->name('test.redirect');
});

Route::get('tru', function () {
	return view('welcom');
});
