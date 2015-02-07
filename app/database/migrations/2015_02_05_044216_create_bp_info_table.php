<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBpInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bp_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('region', 30);
			$table->string('district', 30);
			$table->string('team', 5);
			$table->string('lsa_code', 20);
			$table->string('name', 50);
			$table->string('mobile', 15);
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
		Schema::drop('bp_info');
	}

}
