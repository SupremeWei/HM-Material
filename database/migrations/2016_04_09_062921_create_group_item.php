<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupItem extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_group_items', function(Blueprint $table)
		{
			$table->increments('group_items_id');
			$table->integer('group_id');
			$table->string('spec_name', 20);
			$table->string('spec_description', 20)->nullable();
			$table->string('spec_pdf_dir', 45)->nullable();
			$table->string('spec_pdf_file_name', 45)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_group_items');
	}

}
