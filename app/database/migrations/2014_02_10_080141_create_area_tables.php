<?php

use Illuminate\Database\Migrations\Migration;

class CreateAreaTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('areas', function ($table){
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->integer('city_id')->unsigned();
			$table->string('title');
			$table->string('description');
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
		//
	}

}