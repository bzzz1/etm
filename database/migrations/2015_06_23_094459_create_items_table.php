<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('item_id');
			$table->integer('producer_id')->unsigned()->index();
			$table->integer('kind_id')->unsigned()->index();
			$table->integer('unit_id')->unsigned()->index();
			$table->integer('image_id')->unsigned()->index()->nullable();
			$table->string('title', 128);
			$table->text('description');
			$table->decimal('price', 10,2);
			$table->decimal('capacity', 10,2);
			$table->decimal('rest', 10,2);
			$table->string('item_code', 128);
			$table->string('etm_code', 128);
			$table->boolean('hit');
			$table->boolean('special');
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
		Schema::drop('items');
	}

}
