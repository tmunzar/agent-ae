<?php

use Illuminate\Database\Migrations\Migration;

class CreateCityTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function ($table){
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
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
		Schema::drop('cities');
	}

}