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
                'post_id' => 1,
                'tag_id'  => 1
            ),
            array(
                'post_id' => 2,
                'tag_id'  => 1
            ),
            array(
                'post_id' => 2,
                'tag_id'  => 2
            ),
            array(
                'post_id' => 3,
                'tag_id'  => 1
            ),
            array(
                'post_id' => 3,
                'tag_id'  => 2
            ),
            array(
                'post_id' => 4,
                'tag_id'  => 2
            ),

            array(
                'post_id' => 5,
                'tag_id'  => 1
            ),
            array(
                'post_id' => 5,
                'tag_id'  => 2
            ),
            array(
                'post_id' => 5,
                'tag_id'  => 5
            ),
            array(
                'post_id' => 6,
                'tag_id'  => 1
            ),
            array(
                'post_id' => 7,
                'tag_id'  => 2
            ),
            array(
                'post_id' => 8,
                'tag_id'  => 5
            ),


            array(
                'post_id' => 10,
                'tag_id'  => 5
            ),
            array(
                'post_id' => 10,
                'tag_id'  => 1
            ),
            array(
                'post_id' => 10,
                'tag_id'  => 2
            ),
            array(
                'post_id' => 12,
                'tag_id'  => 5
            ),
            array(
                'post_id' => 11,
                'tag_id'  => 1
            ),
            array(
                'post_id' => 13,
                'tag_id'  => 6
            ),
            array(
                'post_id' => 14,
                'tag_id'  => 5
            ),
            array(
                'post_id' => 14,
                'tag_id'  => 1
            ),
            array(
                'post_id' => 16,
                'tag_id'  => 1
            ),
            array(
                'post_id' => 16,
                'tag_id'  => 8
            ),
            array(
                'post_id' => 16,
                'tag_id'  => 7
            ),
            array(
                'post_id' => 16,
                'tag_id'  => 6
            ),
            array(
                'post_id' => 17,
                'tag_id'  => 8
            ),
            array(
                'post_id' => 18,
                'tag_id'  => 9
            ),
            array(
                'post_id' => 19,
                'tag_id'  => 5
            ),
            array(
                'post_id' => 20,
                'tag_id'  => 4
            ),
            array(
                'post_id' => 1,
                'tag_id'  => 8
            ),
            array(
                'post_id' => 1,
                'tag_id'  => 9
            ),
            array(
                'post_id' => 2,
                'tag_id'  => 8
            ),
            array(
                'post_id' => 25,
                'tag_id'  => 1
            ),
            array(
                'post_id' => 26,
                'tag_id'  => 2
            ),
            array(
                'post_id' => 20,
                'tag_id'  => 1
            ),
            array(
                'post_id' => 22,
                'tag_id'  => 8
            ), array(
                'post_id' => 23,
                'tag_id'  => 2
            ),
            array(
                'post_id' => 29,
                'tag_id'  => 1
            ),
            array(
                'post_id' => 30,
                'tag_id'  => 8
            ), array(
                'post_id' => 31,
                'tag_id'  => 8
            ),
            array(
                'post_id' => 32,
                'tag_id'  => 4
            ), array(
                'post_id' => 33,
                'tag_id'  => 4
            ),
            array(
                'post_id' => 33,
                'tag_id'  => 1
            ),
            array(
                'post_id' => 33,
                'tag_id'  => 2
            )
        ));
    }
}
