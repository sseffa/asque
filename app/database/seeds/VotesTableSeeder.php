<?php

class VotesTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {

        DB::table('votes')->truncate();

        DB::table('votes')->insert(array(
            array(
                'post_id' => 1,
                'user_id' => 1,
                'value'   => -1
            ),
            array(
                'post_id' => 2,
                'user_id' => 2,
                'value'   => 1
            ),
            array(
                'post_id' => 1,
                'user_id' => 2,
                'value'   => 1
            )
        ));
    }
}
