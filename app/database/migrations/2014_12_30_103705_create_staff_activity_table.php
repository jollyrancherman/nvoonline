<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staff_activity', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('resident_id');
			$table->integer('staff_id')->nullable();
			$table->integer('assigned_by')->nullable();
			$table->string('type')->nullable();
			$table->string('text')->nullable();
			$table->boolean('email_sent')->nullable();
			$table->string('viewable')->nullable();
			$table->string('field_1')->nullable();
			$table->string('field_2')->nullable();
			$table->string('field_3')->nullable();
			$table->string('field_4')->nullable();
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
		Schema::drop('staff_activity');
	}

}
