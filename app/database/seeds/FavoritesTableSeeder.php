<?php

class FavoritesTableSeeder extends Seeder {

   /**
    * Run the database seeding.
    *
    * @return void
    */
    public function run() {

        DB::table('favorites')->truncate();

        DB::table('favorites')->insert(array(
            array(
                'post_id' => 1,
                'user_id' => 1
            ),
            array(
                'post_id' => 2,
                'user_id' => 2
            ),
            array(
                'post_id' => 1,
                'user_id' => 2
            )
        ));
    }
}
