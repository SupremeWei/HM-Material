<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductLedInformations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_led_informations', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('category_id');
			$table->string('pardNo');
			$table->string('material');
			$table->string('emittedColor');
			$table->string('lensColor');
			$table->string('waveLength');
			$table->string('liminousIntensity');
            $table->string('viewingAngle2');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_led_informations');
	}

}
