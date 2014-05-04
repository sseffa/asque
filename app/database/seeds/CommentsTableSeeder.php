<?php

class CommentsTableSeeder extends Seeder {

   /**
    * Run the database seeding.
    *
    * @return void
    */
    public function run() {

        DB::table('comments')->truncate();

        DB::table('comments')->insert(array(
            array(
                'post_id'   => 1,
                'text'      => 'lorem ipsum'
            ),
            array(
                'post_id'   => 1,
                'text'      => 'lorem ipsum 2'
            ),
            array(
                'post_id'   => 2,
                'text'      => 'lorem ipsum sit amet'
            )
        ));
    }
}
