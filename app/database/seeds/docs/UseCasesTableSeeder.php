<?php

class UseCasesTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('docs_use_cases')->delete();

		UseCase::create(array(
			'name' => "Login to the Admin CMS",
			'events' => 'Click login', 
			'description' => "Login I already said that",
			'userstory_id' => 1
		));
		
		UseCase::create(array(
			'name' => "Logout to the Admin CMS",
			'events' => 'Click logout',
			'description' => "Logout I already said that",
			'userstory_id' => 1
		));

		
	}

}