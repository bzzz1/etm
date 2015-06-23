<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('producers', function(Blueprint $table)
		{
			$table->increments('producer_id');
			$table->string('code', 64);
			$table->string('title', 256);
			$table->timestamp('added_on');	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('producers');
	}

}
