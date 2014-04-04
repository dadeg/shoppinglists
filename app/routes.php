<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//bind route parameters

Route::model('shoppinglist', 'Shoppinglist');

Route::group(array('before' => 'auth'), function()
{

	// actual pages

	Route::get('/', 'ShoppinglistsController@index');
	Route::get('/details/{shoppinglist}', 'ShoppinglistsController@details');
	Route::get('/create', 'ShoppinglistsController@create');
	Route::get('/edit/{shoppinglist}', 'ShoppinglistsController@edit');
	Route::get('/delete/{shoppinglist}', 'ShoppinglistsController@delete');

	//  form submission handlers

	Route::post('/create', 'ShoppinglistsController@handleCreate');
	Route::post('/edit', 'ShoppinglistsController@handleEdit');
	Route::post('/delete', 'ShoppinglistsController@handleDelete');
});
// user auth

Route::get('/user', 'UsersController@create');
Route::post('/user', 'UsersController@handleCreate');
Route::get('/login', 'UsersController@login');
Route::post('/login', 'UsersController@handleLogin');
Route::get('/logout', 'UsersController@logout');
