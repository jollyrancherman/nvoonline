<?php

class Resident extends \Eloquent {
	protected $fillable = [];
	protected $table = 'residents';

		/**
	 * Eager loads reciever info
	 * @return array
	 */
	public function rxFamily()
	{
		return $this->hasOne('JournalFamily', 'resident_id', 'resident_id');
	}
	public function rxReEntry()
	{
		return $this->hasOne('JournalReentry', 'resident_id', 'resident_id');
	}
	public function rxVictim()
	{
		return $this->hasOne('JournalVictim', 'resident_id', 'resident_id');
	}
	public function rxRelationships()
	{
		return $this->hasOne('JournalRelationships', 'resident_id', 'resident_id');
	}
	public function rxFeelings()
	{
		return $this->hasOne('JournalFeelings', 'resident_id', 'resident_id');
	}
	public function rxChange()
	{
		return $this->hasOne('JournalChange', 'resident_id', 'resident_id');
	}
	public function rxResponsible()
	{
		return $this->hasOne('JournalBehavior', 'resident_id', 'resident_id');
	}
	public function rxWhatGotMeHere()
	{
		return $this->hasOne('JournalWgmh', 'resident_id', 'resident_id');
	}
	public function rxART()
	{
		return $this->hasOne('rx_art', 'resident_id', 'resident_id');
	}
	public function rxOther()
	{
		return $this->hasOne('rx_other', 'resident_id', 'resident_id');
	}
	public function treatment()
	{
		return $this->hasOne('TreatmentOverview', 'resident_id', 'resident_id');
	}

	public static function withTreatment()
	{
		$results =
			Resident::with('treatment')->where('status','=' ,'active')
				->orderBy('last_name', 'desc')->get();

		return $results;
	}

	public static function withAllTreatment($resident_id)
	{


	 	$t = TreatmentOverview::firstOrCreate(['resident_id' => $resident_id]);

	 	$a = [];

	 	array_push($a, 'treatment');

	 	if($t->journal_wgmh){
	 		array_push($a, 'rxWhatGotMeHere');
	 	}

	 	if($t->journal_behavior){
	 		array_push($a, 'rxResponsible');
	 	}

	 	if($t->journal_change){
	 		array_push($a, 'rxChange');
	 	}

	 	if($t->journal_feelings){
	 		array_push($a, 'rxFeelings');
	 	}

	 	if($t->journal_family){
	 		array_push($a, 'rxFamily');
	 	}

	 	if($t->journal_relationships){
	 		array_push($a, 'rxRelationships');
	 	}

	 	if($t->journal_victim){
	 		array_push($a, 'rxVictim');
	 	}

	 	if($t->journal_reentry){
	 		array_push($a, 'rxReentry');
	 	}

	 	// dd($a);

		$r = Resident::with($a)->where('resident_id', '=', $resident_id)->get()->first();

		// dd($r->toArray());

		return $r;
	}

}