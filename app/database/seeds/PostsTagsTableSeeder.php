<?php

class PostsTagsTableSeeder extends Seeder {

   /**
    * Run the database seeding.
    *
    * @return void
    */
    public function run() {

        DB::table('posts_tags')->truncate();

        DB::table('posts_tags')->insert(array(
            array(
                'post_id'   => 1,
                'tag_id'    => 1
            ),
            array(
                'post_id'   => 2,
                'tag_id'    => 1
            ),
            array(
                'post_id'   => 2,
                'tag_id'    => 2
            )
        ));
    }
}
