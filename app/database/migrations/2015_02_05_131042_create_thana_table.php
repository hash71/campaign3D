<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThanaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thana', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('division', 15);
			$table->string('district', 15);
			$table->string('thana_name', 15);
			$table->string('thana_code', 15);
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
		Schema::drop('thana');
	}

}
