<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLedTypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_led_types', function(Blueprint $table)
		{
			$table->increments('led_types_id');
			$table->integer('items_id');
			$table->string('item_type_image', 45)->nullable();
			$table->string('image_dir_name', 45)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_led_types');
	}

}
