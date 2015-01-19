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
		$input = Input::all();
		$i = $input['params'];

		foreach ($i as $k => $v) {
			${$k} = $v;
		};

		$concat = '';

		if(isset($first) && ($first != ''))
		{
			$concat .= 'first LIKE \''.$first.'%\'';
		}

		if(isset($last) && ($last != ''))
		{
			if($concat != '')
			{
				$concat .= ' AND ';
			}
			$concat .= 'last LIKE \''.$last.'%\'';
		}

		if(isset($street) && ($street != ''))
		{
			$add_array = explode(' ', $street);

			foreach ($add_array as $v)
			{
				if($concat != '')
				{
					$concat .= ' AND ';
				}
				$concat .= 'street LIKE \''.$v.'%\'';
			}
		}

		if(isset($voter_id) && ($voter_id != ''))
		{
			if($concat != '')
			{
				$concat .= ' AND ';
			}
			$concat .= 'voter_id LIKE \''.$voter_id.'%\'';
		}

		if(isset($city) && ($city != ''))
		{
			if($concat != '')
			{
				$concat .= ' AND ';
			}
			$concat .= ' MATCH(city) AGAINST (\''.$city.'*\' IN BOOLEAN MODE)';
		}

		if(isset($zip) && ($zip != ''))
		{
			if($concat != '')
			{
				$concat .= ' AND ';
			}
			$concat .= 'zipcode LIKE \''.$zip.'%\'';
		}

		if(isset($birthday) && ($birthday != ''))
		{
			$birthday1 = $birthday;

			if(strlen($birthday) > 2 && strlen($birthday) < 5)
			{
				$date = $birthday;
				$birthday1 = substr($date,0,2).'/'.substr($date,2);
			}
			if(strlen($birthday) > 4)
			{
				$date = $birthday;
				$birthday1 = substr($date,0,2).'/'.substr($date,2,2).'/19'.substr($date,4);
			}

			if($concat != '')
			{
				$concat .= ' AND';
			}
			$concat .= " birthday REGEXP '^".$birthday1."'";
		}

		$voter = DB::table($county)
			->whereRaw($concat)
			->take(50)
			->orderBy('last', 'ASC ')
			->get();
		// $voter = VRFlorida::where('county','=', $county)
		// 	->whereRaw($concat)
		// 	->take(50)
		// 	->orderBy('last', 'ASC ')
		// 	->get();

		return $voter;

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