<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResidentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('residents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('resident_id')->nullable();
			$table->string('first_name')->nullable();
			$table->string('middle_name')->nullable();
			$table->string('last_name')->nullable();
			$table->enum('sex', ['male','female'])->nullable();
			$table->date('dob')->nullable();
			$table->string('case_manage')->nullable();
			$table->string('mentor')->nullable();
			$table->enum('status',['Active', 'Inactive', 'Successful Release', 'General Release', 'Failure of Placement', 'Medical Failure of Placement'])->nullable();
			$table->enum('stage',['Orientation', 'Adjustment', 'Transition', 'Honors'])->nullable();
			$table->enum('stage_state', ['Loss of Privileges', 'Run Risk', 'ISP', 'Furlough'])->nullable();
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
		Schema::drop('residents');
	}

}
