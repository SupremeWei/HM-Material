<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLedCategory extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('led_category', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('item_code');
			$table->string('templet');
			$table->string('english_name');
			$table->string('chinese_name')->nullable();
			$table->string('description')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('led_category');
	}

}
