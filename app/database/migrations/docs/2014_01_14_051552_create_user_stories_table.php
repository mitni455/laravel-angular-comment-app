<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('docs_user_stories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_role_id')->unsigned();
			$table->string('want_to');
			$table->string('so_that');
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
		Schema::drop('docs_user_stories');
	}

}
