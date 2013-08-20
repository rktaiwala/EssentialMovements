<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->string('id')->unique();
			$table->string('name');
			$table->string('artist');
			$table->string('label');
			$table->year('year');
			$table->string('image')->unique();
			$table->decimal('price');
			$table->integer('qty');
			$table->string('options');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
