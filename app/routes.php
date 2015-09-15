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

// Home page
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

// Instructions page
Route::get('instructions', array('as' => 'instructions', 'uses' => 'HomeController@instructions'));

// Results page
Route::get('results', array('as' => 'results', 'uses' => 'HomeController@results'));

// Competition entries
Route::group(array('prefix' => 'entry'), function()
{
	Route::get('/',       array('as' => 'entry.index',   'uses' => 'EntryController@index'));

	Route::post('load',   array('as' => 'entry.load',    'uses' => 'EntryController@load'));

	Route::get('create',  array('as' => 'entry.create',  'uses' => 'EntryController@create'));
	Route::post('store',  array('as' => 'entry.store',   'uses' => 'EntryController@store'));

	Route::get('edit',    array('as' => 'entry.edit',    'uses' => 'EntryController@edit'));
	Route::post('update', array('as' => 'entry.update',  'uses' => 'EntryController@update'));

	Route::get('confirm/{confirmation}', array('as' => 'entry.confirm', 'uses' => 'EntryController@confirm'));
});

// Login (GET)
Route::get('login',  array('as' => 'login', function() { 

	return View::make('login');

}))->before('guest');

// Login (POST)
Route::post('login', array(function() {
	
	$user = array(
		'username' => Input::get('username'),
		'password' => Input::get('password'));

	if (Auth::attempt($user)) {
		return Redirect::intended('/');
	}

	return Redirect::route('login')
			->withMessage('Login failed. Please try again.')
			->withInput();

}));

// Logout
Route::get('logout',  array('as' => 'logout', function() { 
	
	Auth::logout();

	return Redirect::route('home')
			->withInfo('You are now logged out.');

}))->before('auth');


// Administration
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
	Route::get('/',       array('as' => 'admin.index',   'uses' => 'AdminController@index'));

	Route::post('score',  array('as' => 'admin.score',   'uses' => 'AdminController@score'));
	
	Route::get('matches',  array('as' => 'admin.matches', 'uses' => 'AdminController@matches'));
	Route::post('matches', array('uses' => 'AdminController@updateMatches'));

	Route::get('entry',  array('as' => 'admin.entry', 'uses' => 'AdminController@entry'));
	Route::post('entry', array('uses' => 'AdminController@updateEntry'));
});


// Loader.io
Route::get('loaderio-c0c2c980568b95c9b68059c71e59610e.txt', function()
{
	return 'loaderio-c0c2c980568b95c9b68059c71e59610e';
});
