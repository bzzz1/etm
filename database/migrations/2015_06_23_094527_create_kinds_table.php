<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKindsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kinds', function(Blueprint $table)
		{
			$table->increments('kind_id');
			$table->integer('parent_id')->unsigned()->index();
			$table->string('title', 128);
			$table->string('code', 64);
			$table->text('body');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kinds');
	}

}
