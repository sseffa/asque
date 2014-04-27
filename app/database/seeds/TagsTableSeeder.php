<?php

class TagsTableSeeder extends Seeder {

   /**
    * Run the database seeding.
    *
    * @return void
    */
    public function run() {

        DB::table('tags')->truncate();

        DB::table('tags')->insert(array(
            array(
                'name'  => 'C#',
                'count' => 585
            ),
            array(
                'name'  => 'PHP',
                'count' => 687
            ),
            array(
                'name'  => 'Java',
                'count' => 598
            )
        ));
    }
}
