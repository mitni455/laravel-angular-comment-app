<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassMethodArgsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schema_class_method_args', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('method_id')->unsigned();
			$table->string('name');
			$table->string('type')->nullable();	
			$table->string('description')->nullable();
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
		Schema::drop('schema_class_method_args');
	}

}
