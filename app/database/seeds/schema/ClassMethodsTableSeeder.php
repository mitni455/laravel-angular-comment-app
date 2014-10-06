<?php

class ClassMethodsTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('schema_class_methods')->delete();
			
		ClassMethodModel::create(array(
			'class_id'		=> 1, // --- InventoryController
			'name' 			=> 'show',
			'description' 	=> 'Show an item from the Inventory',
			'type' 			=> 'GET'
		));
		
		ClassMethodModel::create(array(
			'class_id'		=> 1, // --- InventoryController
			'name' 			=> 'add',
			'description' 	=> 'Add an item to the Inventory',
			'type' 			=> 'POST'
		));

		ClassMethodModel::create(array(
			'class_id'		=> 1, // --- InventoryController
			'name' 			=> 'delete',
			'description' 	=> 'Delete an item from the Inventory',
			'type' 			=> 'DELETE'
		));
		
	}

}