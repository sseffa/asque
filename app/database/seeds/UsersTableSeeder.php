<?php

class UsersTableSeeder extends Seeder {

   /**
    * Run the database seeding.
    *
    * @return void
    */
    public function run() {

        DB::table('users')->truncate();

        DB::table('users')->insert(array(
            array(
                'email'               => 'example@example.com',
                'password'            => '$2y$10$BS5LjhZqhukFnDDJTRc8fuHf4hT9CmRzG8JG1XGOwjeW24FRm9xBK',
                'permissions'         => '{"user":1}',
                'activated'           => 1,
                'first_name'          => 'Sefa',
                'last_name'           => 'Karagöz',
                'reputation'          => 0,
                'username'            => 'sseffa',
                'web_site_url'        => 'http://www.sefakaragoz.com',
                'biography'           => 'lorem lipsum...',
                'view_count'          => 215,
                'age'                 => 21,
                'created_at'          => date('Y-m-d H:i:s'),
                'updated_at'          => date('Y-m-d H:i:s'),
            ),
            array(
                'email'               => 'test@test.com',
                'password'            => '$2y$10$BS5LjhZqhukFnDDJTRc8fuHf4hT9CmRzG8JG1XGOwjeW24FRm9xBK',
                'permissions'         => '{"user":1}',
                'activated'           => 1,
                'first_name'          => 'Test',
                'last_name'           => 'Test',
                'reputation'          => 0,
                'username'            => 'test',
                'web_site_url'        => 'http://www.google.com',
                'biography'           => 'lorem lipsum...',
                'view_count'          => 187,
                'age'                 => 18,
                'created_at'          => date('Y-m-d H:i:s'),
                'updated_at'          => date('Y-m-d H:i:s'),
            )
        ));
    }
}
