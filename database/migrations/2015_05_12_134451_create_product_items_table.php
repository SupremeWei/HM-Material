<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('item_code');
			$table->string('item_name');
			$table->char('item_status', 1);
			$table->string('type_code');
			$table->string('type_content');
			$table->string('forms_type', 45)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_items');
	}

}
