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
Route::group(['before' => 'auth'], function()
{

	Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index'] );

	/*===================================
	=            QUICKSEARCH            =
	===================================*/
	Route::get('/quicksearch', ['as' => 'quicksearch', 'uses' => 'QuickSearchController@index']);
	Route::post('/quicksearch/api', ['as' => 'quicksearch', 'uses' => 'QuickSearchController@api']);


	/*-----  End of QUICKSEARCH  ------*/


	Route::get('/users/index' , 'UserController@index');
	Route::get('/user/api/getAll' , 'UserController@getAll');



});



Route::get('login', function()
{
	return View::make('login.index');
});





/*======================================
=            SESSION ROUTES            =
======================================*/
Route::post('/login', ['as' => 'login', 'uses' => 'SessionController@create']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionController@destroy']);

/*-----  End of SESSION ROUTES  ------*/


