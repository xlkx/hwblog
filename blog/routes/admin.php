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

Route::group(['prefix'=>'word'], function () {
	Route::get('/', 'WordController@index')
		->name('admin.word.index');
	Route::get('one/{word}', 'WordController@oneWord')
		->name('admin.word.one');
	Route::get('add', 'WordController@add')
		->name('admin.word.add');
	Route::post('add', 'WordController@addPost')
		->name('admin.word.addPost');
	Route::get('delete/{word}', 'WordController@delete')
		->name('admin.word.delete');
});

Route::group(['prefix'=>'user'], function () {
	Route::get('/', 'UserController@index')
		->name('admin.user.index');
	Route::get('login', 'UserController@login')
		->name('admin.user.login');
	Route::post('login', 'UserController@loginPost')
		->name('admin.user.loginPost');
	Route::get('signup', 'UserController@signUp')
		->name('admin.user.signUp');
	Route::post('signup', 'UserController@signUpPost')
		->name('admin.user.signUpPost');
	Route::get('profile/{user}', 'UserController@profile')
		->name('admin.user.profile');
});

Route::group(['prefix'=>'text'], function () {
	Route::get('/', 'TextController@index')
		->name('admin.text.index');
	Route::get('read/{text}', 'TextController@read')
		->name('admin.text.read');
});