<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CommentTableSeeder');
		$this->command->info('Comment table seeded.');
		
		$this->call('PagesTableSeeder');
		$this->command->info('Page table seeded.');
	}

}