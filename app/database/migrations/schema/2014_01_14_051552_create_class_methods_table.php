<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassMethodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schema_class_methods', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('class_id')->unsigned();
			$table->string('name');
			$table->string('description')->nullable();
			$table->string('type')->nullable();	
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
		Schema::drop('schema_class_methods');
	}

}
