<?php

class SequenceDiagramTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('docs_sequence_diagrams')->delete();

		SequenceDiagram::create(array(
			'usecase_id' 	=> 1,
			'method_id' 	=> 1
		));

		SequenceDiagram::create(array(
			'usecase_id' 	=> 2,
			'method_id' 	=> 2
		));

		SequenceDiagram::create(array(
			'usecase_id' 	=> 1,
			'method_id' 	=> 3
		));
	}

}