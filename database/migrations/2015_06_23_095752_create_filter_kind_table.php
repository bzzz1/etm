<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilterKindTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filter_kind', function(Blueprint $table)
		{
			$table->increments('filter_kind_id');

			$table->integer('filter_id')->unsigned()->index();
			$table->foreign('filter_id')->references('filter_id')->on('filters')->onDelete('cascade');

			$table->integer('kind_id')->unsigned()->index();
			$table->foreign('kind_id')->references('kind_id')->on('kinds')->onDelete('cascade'); 
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('filter_kind');
	}

}
