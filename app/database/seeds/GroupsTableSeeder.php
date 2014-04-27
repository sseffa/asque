<?php

class GroupsTableSeeder extends Seeder {

   /**
    * Run the database seeding.
    *
    * @return void
    */
    public function run() {

        DB::table('groups')->truncate();

        DB::table('groups')->insert(array(
            array(
                'name'          => 'User',
                'permissions'   => '{"user":1}',
            )
        ));
    }
}
