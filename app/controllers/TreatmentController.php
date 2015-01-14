<?php

class TreatmentController extends \BaseController {

	/**
	 *  Shows a list of active residents in the program and where they are with forward thinking treatment.
	 * @return View
	 */
	public function forwardThinking()
	{
		//Grab all active residents with treatment status
		$residents = Resident::withTreatment();

		return View::make('treatment.fowardThinking')
						->with('residents', $residents);
	}

	public function forwardThinkingAPI()
	{
		//Grab all active residents with treatment status
		$residents = Resident::withTreatment();

		return $residents;
	}

	public function update()
	{
		$input = Input::all();

		$t = TreatmentOverview::firstOrCreate(['resident_id' => $input['resident_id']]);
		$t->update([$input['treatment'] => $input['t_value']]);
		$t->save();

		$class = ucfirst(camel_case($input['treatment']));

		$a = $class::firstOrCreate(['resident_id' => $input['resident_id']]);
		$a->update(['active' => $input['t_value']]);
		$a->save();

		//Grab all active residents with treatment status
		$residents = Resident::withTreatment();
		return $residents->toJson();
	}

	public function getJournals($id)
	{
		$treatment = Resident::withAllTreatment($id);
		return $treatment;
	}

	public function updateJournals()
	{
		$input = Input::all();

		$class = $input['journal'];

		$journal = $class::where('resident_id','=', $input['resident_id'])->update([$input['journal_id'] => $input['value']]);

		$treatment = Resident::withAllTreatment($input['resident_id']);

		return $treatment;

	}

}