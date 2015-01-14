<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personel', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->date('hire_date')->nullable();
			$table->string('street')->nullable();
			$table->string('city')->nullable();
			$table->string('zipcode')->nullable();
			$table->string('country')->nullable();
			$table->string('cell')->nullable();
			$table->string('phone')->nullable();
			$table->string('phone2')->nullable();
			$table->string('position')->nullable();

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
		Schema::drop('personel');
	}

}
