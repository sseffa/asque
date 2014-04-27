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
                'text'      => 'lorem lipsum'
            ),
            array(
                'post_id'   => 1,
                'text'      => 'lorem lipsum 2'
            ),
            array(
                'post_id'   => 2,
                'text'      => 'lorem lipsum sit amet'
            )
        ));
    }
}
