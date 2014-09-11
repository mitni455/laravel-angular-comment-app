<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class PagesTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();
		
		DB::table('pages')->delete();
		
		
		Page::create([
			'id'	=> 1,
			'title'	=> 	'Master Path', 
			'path' 	=> 	'master', 
			'parent_id' => ''	
		]);
		
		foreach(range(1, 10) as $index)
		{
			Page::create([
				'title'	=> 	'Fake page #' . $index, 
				'path' 	=> 	'path' . $index, 
				'parent_id' => 1	
			]);
		}
	}

}