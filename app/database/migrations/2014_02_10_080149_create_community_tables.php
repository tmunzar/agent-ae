<?php

use Illuminate\Database\Migrations\Migration;

class CreateCommunityTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('communities', function ($table){
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->integer('area_id')->unsigned();
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