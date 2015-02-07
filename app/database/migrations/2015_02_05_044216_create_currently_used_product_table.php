<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCurrentlyUsedProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('currently_used_product', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('product', 15);
			$table->timestamps();
			$table->integer('product_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('currently_used_product');
	}

}
