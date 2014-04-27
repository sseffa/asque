<?php

class UsersGroupsTableSeeder extends Seeder {

   /**
    * Run the database seeding.
    *
    * @return void
    */
    public function run() {

        DB::table('users_groups')->truncate();

        DB::table('users_groups')->insert(array(
            array(
                'user_id'   => 1,
                'group_id'  => 1
            ),
            array(
                'user_id'   => 2,
                'group_id'  => 1
            )
        ));
    }
}
