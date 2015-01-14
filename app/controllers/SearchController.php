<?php

class SearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /search
	 *
	 * @return Response
	 */
	public function searchAll()
	{
		$input = Input::all();

		if($input['query'] == ''){
			return null;
		}

		$results = Resident::where('first_name', 'LIKE', '%'.$input['query'].'%')
													->orWhere('last_name', 'LIKE', '%'.$input['query'].'%')
													->orWhere('resident_id', 'LIKE', '%'.$input['query'].'%')
													->orWhere('id', 'LIKE', '%'.$input['query'].'%')->get();

		// $results = Resident::where('status','=', 'Active')->get(['id', 'first_name', 'last_name']);

		return $results->toJson();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /search/create
	 *
	 * @return Response
	 */
	public function searchAllApi($query)
	{


		$array = explode('.', $query);

		if($array[0] == 'r'){
			$results = Resident::where('first_name', 'LIKE', '%'.$array[1].'%')
														->orWhere('last_name', 'LIKE', '%'.$array[1].'%')
														->orWhere('resident_id', 'LIKE', '%'.$array[1].'%')
														->orWhere('id', 'LIKE', '%'.$array[1].'%')->get(['id','first_name', 'last_name',
															'resident_id']);
		}else{
			$results = Resident::where('first_name', 'LIKE', '%'.$query.'%')
														->orWhere('last_name', 'LIKE', '%'.$query.'%')
														->orWhere('resident_id', 'LIKE', '%'.$query.'%')
														->orWhere('id', 'LIKE', '%'.$query.'%')->get(['id','first_name', 'last_name',
															'resident_id']);
		}

		return $results->toJson();

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /search
	 *
	 * @return Response
	 */
	public function getAll()
	{
		$results = Resident::all();
		return $results->toJson();
	}

	/**
	 * Display the specified resource.
	 * GET /search/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /search/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /search/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /search/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}