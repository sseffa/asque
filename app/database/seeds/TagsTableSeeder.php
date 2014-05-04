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
                'count' => 123
            ),
            array(
                'name'  => 'Mysql',
                'slug'  => 'mysql',
                'count' => 213
            ),
            array(
                'name'  => 'Mssql',
                'slug'  => 'mssql',
                'count' => 435
            ),
            array(
                'name'  => 'Javascript',
                'slug'  => 'javascript',
                'count' => 123
            ),
            array(
                'name'  => 'JQuery',
                'slug'  => 'jquery',
                'count' => 56
            ),
            array(
                'name'  => 'Mootools',
                'slug'  => 'mootools',
                'count' => 45
            ),
            array(
                'name'  => 'Oracle',
                'slug'  => 'oracle',
                'count' => 324
            ),
            array(
                'name'  => 'Laravel',
                'slug'  => 'laravel',
                'count' => 124
            )
        ));
    }
}
