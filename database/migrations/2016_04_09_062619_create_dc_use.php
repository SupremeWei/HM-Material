<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDcUse extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_dc_use', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('group_id');
			$table->string('type', 20);
			$table->string('Dielectric', 80);
			$table->string('Description', 80);
			$table->string('CapacitanceRange', 80);
			$table->string('RatedVoltageRange', 80);
			$table->string('image', 45);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_dc_use');
	}

}
