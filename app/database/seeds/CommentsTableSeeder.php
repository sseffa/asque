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
                'post_id'    => 1,
                'user_id'    => 1,
                'comment'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'post_id'    => 1,
                'user_id'    => 2,
                'comment'       => 'Maecenas sollicitudin tortor eget metus aliquam interdum. ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'post_id'    => 1,
                'user_id'    => 1,
                'comment'       => 'Nullam nec nibh convallis, volutpat sem eget, laoreet ipsum.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'post_id'    => 2,
                'user_id'    => 1,
                'comment'       => 'Morbi suscipit dui at viverra dignissim.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'post_id'    => 2,
                'user_id'    => 1,
                'comment'       => 'Cras elementum justo ac semper tempor.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'post_id'    => 2,
                'user_id'    => 2,
                'comment'       => 'Vestibulum vel nisl ut magna condimentum facilisis et ut sapien.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'post_id'    => 30,
                'user_id'    => 1,
                'comment'       => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'post_id'    => 30,
                'user_id'    => 2,
                'comment'       => 'Quisque mauris ante, vehicula ut mollis ac, dignissim in nulla.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'post_id'    => 30,
                'user_id'    => 1,
                'comment'       => 'Sed auctor iaculis dui, quis pellentesque elit condimentum ac.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'post_id'    => 31,
                'user_id'    => 1,
                'comment'       => 'Cras convallis purus a nulla ultrices venenatis.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )
        ));
    }
}
