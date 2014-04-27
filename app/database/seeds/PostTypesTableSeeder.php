<?php

class PostTypesTableSeeder extends Seeder {

   /**
    * Run the database seeding.
    *
    * @return void
    */
    public function run() {

        DB::table('post_types')->truncate();

        DB::table('post_types')->insert(array(
            array(
                'name'  => 'question'
            ),
            array(
                'name'  => 'answer'
            ),
            array(
                'name'  => 'note'
            )
        ));
    }
}
