<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreatmentOverviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('treatment_overview', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('resident_id')->nullable();
			$table->boolean('journal_behavior')->default(false);
			$table->boolean('journal_change')->default(false);
			$table->boolean('journal_family')->default(false);
			$table->boolean('journal_feelings')->default(false);
			$table->boolean('journal_reentry')->default(false);
			$table->boolean('journal_relationships')->default(false);
			$table->boolean('journal_victim')->default(false);
			$table->boolean('journal_wgmh')->default(false);
			$table->boolean('art')->default(false);
			$table->boolean('other')->default(false);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('treatment_overview');
	}

}
