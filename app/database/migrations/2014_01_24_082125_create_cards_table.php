<?php

use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cards', function ($table){
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->string('title');
			$table->text('image');
			$table->string('slug');
			$table->text('description');
			$table->string('location');
			$table->enum('transaction_type', array('sale', 'lease', 'sale-and-lease'));
			$table->enum('property_type', array('residential', 'commercial'));
			$table->integer('price');
			$table->integer('area');
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
		Schema::drop('cards');
	}

}