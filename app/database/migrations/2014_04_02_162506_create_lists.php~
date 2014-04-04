<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLists extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lists', function($table){
			$table->increments('id');
			$table->string('name', 128);
			$table->text('monday');
			$table->text('tuesday');
			$table->text('wednesday');
			$table->text('thursday');
			$table->text('friday');
			$table->text('saturday');
			$table->text('sunday');
			$table->text('fruit');
			$table->text('vegetable');
			$table->text('dairy');
			$table->text('meatsub');
			$table->text('meat');
			$table->text('grain');
			$table->text('drygoods');
			$table->text('other');
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
		Schema::drop('lists');
	}

}
