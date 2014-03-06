<?php

use Illuminate\Database\Migrations\Migration;

class CreateMorningminutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('morning_minutes', function ($table){
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->string('title');
			$table->text('image');
			$table->softDeletes();
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
		Schema::drop('morning_minutes');
	}

}