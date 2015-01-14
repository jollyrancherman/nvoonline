<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJournalBehaviorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('journal_behavior', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('resident_id')->nullable();
			$table->boolean('active')->default(false);
			$table->timestamp('start')->nullable();
			$table->integer('001')->nullable();
			$table->integer('002')->nullable();
			$table->integer('003')->nullable();
			$table->integer('004')->nullable();
			$table->integer('005')->nullable();
			$table->integer('006')->nullable();
			$table->integer('007')->nullable();
			$table->integer('008')->nullable();
			$table->integer('009')->nullable();
			$table->integer('010')->nullable();
			$table->integer('011')->nullable();
			$table->integer('012')->nullable();
			$table->integer('013')->nullable();
			$table->integer('014')->nullable();
			$table->integer('015')->nullable();
			$table->integer('016')->nullable();
			$table->integer('017')->nullable();
			$table->integer('018')->nullable();
			$table->integer('019')->nullable();
			$table->integer('020')->nullable();
			$table->integer('021')->nullable();
			$table->integer('022')->nullable();
			$table->integer('023')->nullable();
			$table->integer('024')->nullable();
			$table->integer('025')->nullable();
			$table->integer('026')->nullable();
			$table->integer('027')->nullable();
			$table->integer('028')->nullable();
			$table->integer('029')->nullable();
			$table->integer('030')->nullable();
			$table->integer('031')->nullable();
			$table->integer('032')->nullable();
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
		Schema::drop('journal_behavior');
	}

}
