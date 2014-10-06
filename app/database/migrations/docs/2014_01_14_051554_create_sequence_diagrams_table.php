<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSequenceDiagramsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('docs_sequence_diagrams', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('usecase_id')->unsigned();
			$table->integer('role_id')->unsigned();
			$table->integer('method_id')->unsigned();
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
		Schema::drop('docs_sequence_diagrams');
	}

}
