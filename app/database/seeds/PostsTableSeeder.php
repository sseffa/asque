<?php

class PostsTableSeeder extends Seeder {

   /**
    * Run the database seeding.
    *
    * @return void
    */
    public function run() {

        DB::table('posts')->truncate();

        DB::table('posts')->insert(array(
            array(
                'post_type_id'  => 1,
                'title'         => 'lorem ipsum title',
                'body'          => 'loreli ipsum body',
                'view_count'    => 54,
                'comment_count' => 1,
                'favorite_count'=> 15,
                'user_id'       => 1,
                'parent_id'     => 0,
                'closed_at'     => date('Y-m-d H:i:s')
            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'lorem ipsum title 2',
                'body'          => 'loreli ipsum body 2',
                'view_count'    => 54,
                'comment_count' => 1,
                'favorite_count'=> 15,
                'user_id'       => 1,
                'parent_id'     => 0,
                'closed_at'     => date('Y-m-d H:i:s')
            ),
            array(
                'post_type_id'  => 2,
                'title'         => 'lorem ipsum title 3',
                'body'          => 'loreli ipsum body 3',
                'view_count'    => 54,
                'comment_count' => 1,
                'favorite_count'=> 15,
                'user_id'       => 2,
                'parent_id'     => 1,
                'closed_at'     => date('Y-m-d H:i:s')
            )
        ));
    }
}
