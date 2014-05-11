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
                'title'         => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Ut id libero nec lacus cursus consequat.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2014-04-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 2,
                'title'         => 'Aliquam erat volutpat.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 2,
                'parent_id'     => 0,
                'created_at'    => date('2014-04-15 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Duis nec turpis massa.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2014-03-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Nulla pharetra dui quis rhoncus fringilla.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2014-03-21 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 2,
                'title'         => 'Curabitur sed vulputate eros.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 2,
                'parent_id'     => 0,
                'created_at'    => date('2014-03-30 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Fusce pellentesque lectus et purus varius, ac aliquet ligula faucibus.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2014-02-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Maecenas sit amet tellus vel ligula sodales vulputate.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2014-02-11 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 2,
                'title'         => 'Praesent euismod egestas sem.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 2,
                'parent_id'     => 0,
                'created_at'    => date('2014-04-11 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Maecenas massa tortor, faucibus a malesuada vitae, congue ac lacus.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2014-02-21 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Fusce dapibus sagittis viverra.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2014-02-25 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 2,
                'title'         => 'Vivamus gravida eros vel massa accumsan, ac tincidunt quam eleifend.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 2,
                'parent_id'     => 0,
                'created_at'    => date('2014-01-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Vivamus ac sodales enim, eu rutrum nunc.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2014-01-11 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Cras a eros egestas, dictum neque ut, tincidunt lorem',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2014-01-11 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 2,
                'title'         => 'Integer a sollicitudin leo',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 2,
                'parent_id'     => 0,
                'created_at'    => date('2013-12-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Fusce ut mi vel elit blandit interdum quis at felis.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2013-12-11 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Duis sem orci, tempor facilisis posuere commodo, faucibus at odio.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2013-11-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 2,
                'title'         => 'Aliquam erat volutpat.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 2,
                'parent_id'     => 0,
                'created_at'    => date('2013-11-21 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2013-10-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Ut id libero nec lacus cursus consequat.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2013-09-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 2,
                'title'         => 'Aliquam erat volutpat.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 2,
                'parent_id'     => 0,
                'created_at'    => date('2013-08-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Fusce dapibus sagittis viverra.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2013-06-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 2,
                'title'         => 'Vivamus gravida eros vel massa accumsan, ac tincidunt quam eleifend.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 2,
                'parent_id'     => 0,
                'created_at'    => date('2013-04-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Vivamus ac sodales enim, eu rutrum nunc.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2013-01-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Cras a eros egestas, dictum neque ut, tincidunt lorem',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2013-01-21 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 2,
                'title'         => 'Integer a sollicitudin leo',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 2,
                'parent_id'     => 0,
                'created_at'    => date('2012-12-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2012-12-12 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Ut id libero nec lacus cursus consequat.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2012-11-11 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 2,
                'title'         => 'Aliquam erat volutpat.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 2,
                'parent_id'     => 0,
                'created_at'    => date('2011-11-11 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Duis nec turpis massa.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 0,
                'created_at'    => date('2012-02-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            // sub post
            array(
                'post_type_id'  => 1,
                'title'         => 'Nulla pharetra dui quis rhoncus fringilla.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 1,
                'created_at'    => date('2011-04-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 2,
                'title'         => 'Aliquam erat volutpat.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 2,
                'parent_id'     => 1,
                'created_at'    => date('2012-04-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Duis nec turpis massa.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 2,
                'created_at'    => date('2010-04-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')

            ),
            array(
                'post_type_id'  => 1,
                'title'         => 'Nulla pharetra dui quis rhoncus fringilla.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 1,
                'parent_id'     => 3,
                'created_at'    => date('2011-12-01 16:00:00'),
                'updated_at'    => date('Y-m-d H:i:s')
            ),
            array(
                'post_type_id'  => 2,
                'title'         => 'Curabitur sed vulputate eros.',
                'body'          => 'Aenean nunc neque, ultrices at pharetra eget, suscipit vitae velit. Cras nec quam sollicitudin nibh tempus tincidunt. Ut magna ipsum, suscipit nec consectetur quis, varius eu lectus.',
                'view_count'    => 54,
                'comment_count' => 1,
                'user_id'       => 2,
                'parent_id'     => 4,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            )
        ));
    }
}
