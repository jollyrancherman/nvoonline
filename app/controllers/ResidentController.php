<?php

class ResidentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /resident
	 *
	 * @return Response
	 */
	public function getByID($id)
	{
		// $resident = Resident::with('treatment')->where('resident_id','=',$id)->first();
		

		$resident = Resident::withAllTreatment($id);

		// dd($resident->toArray());

		return View::make('resident.profile')
								->with('resident', $resident);
	}

}