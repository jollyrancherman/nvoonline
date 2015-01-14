<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResidentsFamilyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resident_family', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('resident_id');
			$table->string('first_name')->nullable();
			$table->string('middle_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('street')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->string('zipcode')->nullable();
			$table->string('cell_phone')->nullable();
			$table->string('home_phone')->nullable();
			$table->string('work_phone')->nullable();
			$table->string('other_phone')->nullable();
			$table->string('other_phone2')->nullable();
			$table->string('relationship')->nullable();
			$table->enum('status',['ok', 'restricted']);
			$table->text('notes')->nullable();
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
		Schema::drop('resident_family');
	}

}
