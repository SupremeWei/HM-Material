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
            $table->integer('led_types_id');
			$table->string('part_no', 20);
			$table->string('material', 45);
			$table->string('emitted_color', 45);
			$table->string('lens_color', 45);
			$table->string('wave_length', 45);
			$table->string('luminous_intensity', 45);
            $table->string('viewing_angle2', 45);
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
