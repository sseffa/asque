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

		$this->call('UsersTableSeeder');
		$this->call('GroupsTableSeeder');
		$this->call('ThrottleTableSeeder');
		$this->call('UsersGroupsTableSeeder');
		$this->call('PostsTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('PostsTagsTableSeeder');
		$this->call('PostTypesTableSeeder');
		$this->call('VotesTableSeeder');
		$this->call('CommentsTableSeeder');
	}

}
