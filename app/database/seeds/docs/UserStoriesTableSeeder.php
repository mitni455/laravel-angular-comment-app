<?php

class UserStoriesTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('docs_user_stories')->delete();

		UserStory::create(array(
			'role_id' => 1,
			'user_role_id' => 1,
			'want_to' => "have sex",
			'so_that' => "I can get laid",
			'description' => "Everyone wants to get laid, it's natural. So deal with it."
		));

		
	}

}