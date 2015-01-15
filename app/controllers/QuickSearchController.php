<?php

class QuickSearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /quicksearch
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('quicksearch.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /quicksearch/create
	 *
	 * @return Response
	 */
	public function api()
	{
		dd(Input::all());
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /quicksearch
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /quicksearch/{id}
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
	 * GET /quicksearch/{id}/edit
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
	 * PUT /quicksearch/{id}
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
	 * DELETE /quicksearch/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}