<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJournalRelationshipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('journal_relationships', function(Blueprint $table)
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
		Schema::drop('journal_relationships');
	}

}
