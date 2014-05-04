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
                'name'  => 'CSharp',
                'slug'  => 'csharp',
                'count' => 585
            ),
            array(
                'name'  => 'PHP',
                'slug'  => 'php',
                'count' => 687
            ),
            array(
                'name'  => 'Java',
                'slug'  => 'java',
                'count' => 598
            )
        ));
    }
}
