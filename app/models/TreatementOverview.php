<?php

class TreatmentOverview extends \Eloquent {
	protected $guarded = ['id'];

	protected $table = 'treatment_overview';

	public function getJournalWgmhAttribute($value) { return (boolean) $value; }
	public function getJournalBehaviorAttribute($value) { return (boolean) $value; }
	public function getJournalChangeAttribute($value) { return (boolean) $value; }
	public function getJournalFamilyAttribute($value) { return (boolean) $value; }
	public function getJournalFeelingsAttribute($value) { return (boolean) $value; }
	public function getJournalReentryAttribute($value) { return (boolean) $value; }
	public function getJournalRelationshipsAttribute($value) { return (boolean) $value; }
	public function getJournalVictimAttribute($value) { return (boolean) $value; }
	public function getArtAttribute($value) { return (boolean) $value; }

}