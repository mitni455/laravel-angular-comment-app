<?php

class UserRolesTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('docs_user_roles')->delete();

		UserRole::create(array(
			'id'			=>	1, 
			'name' 			=> "Admin",
			'description' 	=> "Super User of doom."
		));

		
	}

}