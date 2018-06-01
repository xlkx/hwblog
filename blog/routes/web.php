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

Route::group(['prefix'=>'word'], function () {
	Route::get('/', 'WordController@index')
		->name('word.index');
	Route::get('one/{word}', 'WordController@oneWord')
		->name('word.one');
	Route::get('add', 'WordController@add')
		->name('word.add');
	Route::post('add', 'WordController@addPost')
		->name('word.addPost');
	Route::get('delete/{word}', 'WordController@delete')
		->name('word.delete');
});

Route::group(['prefix'=>'user'], function () {
	Route::get('/', 'UserController@index')
		->name('user.index');
	Route::get('login', 'UserController@login')
		->name('user.login');
	Route::post('login', 'UserController@loginPost')
		->name('user.loginPost');
	Route::get('signup', 'UserController@signUp')
		->name('user.signUp');
	Route::post('signup', 'UserController@signUpPost')
		->name('user.signUpPost');
	Route::get('profile/{user}', 'UserController@profile')
		->name('user.profile');
});

Route::group(['prefix'=>'text'], function () {
	Route::get('/', 'TextController@index')
		->name('text.index');
	Route::get('read/{text}', 'TextController@read')
		->name('text.read');
});

Route::get('test', 'TestController@testGet');

Route::post('test', 'TestController@testPost');

Route::get('tru', function () {
	return view('welcom');
});
