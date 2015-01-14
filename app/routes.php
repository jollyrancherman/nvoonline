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

	/*===============================
	=            REPORTS            =
	===============================*/
	Route::get('/reports', ['as' => 'report', 'uses' => 'ReportsController@index']);
	Route::get('/reports/ForwardThinking', ['as' => 'report.forwardThinking', 'uses' => 'ReportsController@forwardThinking']);
	Route::get('/reports/Contact', ['as' => 'report.Contact', 'uses' => 'ReportsController@Contact']);
	Route::get('/reports/cn', ['as' => 'report.cn', 'uses' => 'ReportsController@cn']);
	Route::get('/reports/ForwardThinking', ['as' => 'report.forwardThinking', 'uses' => 'ReportsController@forwardThinking']);
	
	
	/*-----  End of REPORTS  ------*/
	
	




	/*================================
	=            RESIDENT            =
	================================*/
	Route::get('/resident/{id}', 'ResidentController@getByID');


	/*-----  End of RESIDENT  ------*/



	/*=================================
	=            SEARCHBAR            =
	=================================*/
	Route::post('/searchAll', 'SearchController@searchAll');
	Route::get('/searchAll/api/all', 'SearchController@getAll');
	Route::get('/searchAll/api/{query}', 'SearchController@searchAllApi');


	/*-----  End of SEARCHBAR  ------*/

	/*=================================
	=            TREATMENT            =
	=================================*/

	Route::get('/treatment/forwardThinking', 'TreatmentController@forwardThinking');
	Route::get('/treatment/forwardThinking/api', 'TreatmentController@forwardThinkingAPI');
	Route::post('/treatment/forwardThinking/update', 'TreatmentController@update');
	Route::get('/treatment/forwardThinking/getJournals/{id}', 'TreatmentController@getJournals');
	Route::post('/treatment/forwardThinking/updateJournal', 'TreatmentController@updateJournals');


	/*-----  End of TREATMENT  ------*/




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


