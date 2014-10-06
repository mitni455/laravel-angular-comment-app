<?php

class ClassMethodArgumentsTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('schema_class_methods')->delete();
			
		ClassMethodArgumentModel::create(array(
			'method_id'		=> 1, // --- InventoryController.show()
			'name' 			=> '$id',
			'description' 	=> 'Which id to show',
			'type' 			=> 'int'
		));
		
		
	}

}