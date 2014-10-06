<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUseCasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('docs_use_cases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('userstory_id')->unsigned();
			$table->string('name');
			$table->string('event');
			$table->string('description')->nullable();
			$table->integer('parent_id')->unsigned()->nullable();	
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
		Schema::drop('docs_use_cases');
	}

}
