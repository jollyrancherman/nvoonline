<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /user
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::get(['first_name', 'last_name']);

		return View::make('users.index')
			->with('users', $users);
	}




	/*===========================
	=            API            =
	===========================*/
 	public function getAll()
 	{
 		$users = User::get(['first_name', 'last_name']);
 		// return $users->toArray();
 		return Toastr::set($users, 'OK');
 	}


	/*-----  End of API  ------*/


}