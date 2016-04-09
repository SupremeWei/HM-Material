<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_documents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('item_code');
			$table->integer('document_seq');
			$table->string('document_name');
			$table->string('document_description');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_documents');
	}

}
