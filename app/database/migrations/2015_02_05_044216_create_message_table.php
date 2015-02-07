<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('message', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('campaign_id', 10)->nullable();
			$table->string('customer_name', 50)->nullable();
			$table->integer('age')->nullable();
			$table->string('gender', 10)->nullable();
			$table->string('customer_mobile', 15)->nullable();
			$table->string('thana_code', 15)->nullable();
			$table->integer('education_id')->unsigned()->nullable();
			$table->integer('occupation_id')->unsigned()->nullable();
			$table->string('coupon_code', 50)->nullable();
			$table->integer('currently_used_product_table_id')->unsigned()->nullable();
			$table->string('sales', 5)->nullable();
			$table->string('products_sold', 50)->nullable();
			$table->timestamps();
			$table->string('bp_mobile', 15);
			$table->text('error', 65535)->nullable();
			$table->string('full_message');
			$table->integer('FAL')->default(0);
			$table->integer('PDF')->default(0);
			$table->integer('PWB')->default(0);
			$table->integer('PNS')->default(0);
			$table->integer('PPC')->default(0);
			$table->integer('DBM')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('message');
	}

}
