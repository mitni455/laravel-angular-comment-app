<?php

class ClassPropertiesTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('schema_class_properties')->delete();
			
		ClassPropertyModel::create(array(
			'class_id'		=> 1, // --- InventoryController
			'name' 			=> '$gnarly',
			'type' 			=> 'string',
			'description' 	=> 'Pretend property of doom',
			'visibility'	=> 'protected',
			'getter'		=> 'getGnarly',
			'setter'		=> 'setGnarly'
		));
		
				
	}

}