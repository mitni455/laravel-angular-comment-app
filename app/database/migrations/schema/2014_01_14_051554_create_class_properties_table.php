<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassPropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schema_class_properties', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('class_id')->unsigned();
			$table->string('name');
			$table->string('type')->nullable();
			$table->string('description')->nullable();
			$table->string('visibility')->nullable();
			$table->string('getter')->nullable();
			$table->string('setter')->nullable();
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
		Schema::drop('schema_class_properties');
	}

}
