<?php

class ClassesTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('schema_classes')->delete();
			
		ClassModel::create(array(
			'id'			=> 1, 
			'name' 			=> 'InventoryController',
			'description' 	=> 'Manages Inventory Models',
			'type' 			=> 'Controller'
			// ,'superclass_id' => 1
		));
		
		
		ClassModel::create(array(
			'id'			=> 2, 
			'name' 			=> 'Inventory',
			'description' 	=> 'Represents a stock item',
			'type' 			=> 'Model'
			// ,'superclass_id' => 1
		));
		
		
		ClassModel::create(array(
			'id'			=> 3, 
			'name' 			=> 'CmsAdminController',
			'description' 	=> 'Manages the backend',
			'type' 			=> 'Controller'
			// ,'superclass_id' => 1
		));
		

		
	}

}