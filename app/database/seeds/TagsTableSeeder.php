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
            ),
            array(
                'name'  => 'symfony',
                'slug'  => 'symfony',
                'count' => 0
            ),
            array(
                'name'  => 'cakephp',
                'slug'  => 'cakephp',
                'count' => 0
            ),
            array(
                'name'  => 'zendframework',
                'slug'  => 'zendframework',
                'count' => 0
            ),
            array(
                'name'  => 'phpstorm',
                'slug'  => 'phpstorm',
                'count' => 0
            ),
            array(
                'name'  => 'sublimetext',
                'slug'  => 'sublimetext',
                'count' => 0
            ),
            array(
                'name'  => 'visualstudio',
                'slug'  => 'visualstudio',
                'count' => 0
            ),
            array(
                'name'  => 'mongodb',
                'slug'  => 'mongodb',
                'count' => 0
            ),
            array(
                'name'  => 'angularjs',
                'slug'  => 'angularjs',
                'count' => 0
            ),
            array(
                'name'  => 'ios',
                'slug'  => 'ios',
                'count' => 0
            ),
            array(
                'name'  => 'iphone',
                'slug'  => 'iphone',
                'count' => 0
            ),
            array(
                'name'  => 'ruby',
                'slug'  => 'ruby',
                'count' => 0
            ),
            array(
                'name'  => 'c',
                'slug'  => 'c',
                'count' => 0
            ),
            array(
                'name'  => 'ajax',
                'slug'  => 'ajax',
                'count' => 0
            ),
            array(
                'name'  => 'array',
                'slug'  => 'array',
                'count' => 0
            ),
            array(
                'name'  => 'xml',
                'slug'  => 'xml',
                'count' => 0
            ),
            array(
                'name'  => 'json',
                'slug'  => 'json',
                'count' => 0
            ),
            array(
                'name'  => 'string',
                'slug'  => 'string',
                'count' => 0
            ),
            array(
                'name'  => 'integer',
                'slug'  => 'integer',
                'count' => 0
            ),
            array(
                'name'  => 'object',
                'slug'  => 'object',
                'count' => 0
            ),
            array(
                'name'  => 'linq',
                'slug'  => 'linq',
                'count' => 0
            ),
            array(
                'name'  => 'linux',
                'slug'  => 'linux',
                'count' => 0
            ),
            array(
                'name'  => 'windows',
                'slug'  => 'windows',
                'count' => 0
            ),
            array(
                'name'  => 'facebook',
                'slug'  => 'facebook',
                'count' => 0
            ),
            array(
                'name'  => 'twitter',
                'slug'  => 'twitter',
                'count' => 0
            ),
            array(
                'name'  => 'nodejs',
                'slug'  => 'nodejs',
                'count' => 0
            ),
            array(
                'name'  => 'git',
                'slug'  => 'git',
                'count' => 0
            ),
            array(
                'name'  => 'composer',
                'slug'  => 'composer',
                'count' => 0
            ),
            array(
                'name'  => 'xss',
                'slug'  => 'xss',
                'count' => 0
            ),
            array(
                'name'  => 'sqlinjection',
                'slug'  => 'sqlinjection',
                'count' => 0
            ),
            array(
                'name'  => 'security',
                'slug'  => 'security',
                'count' => 0
            ),
            array(
                'name'  => 'cms',
                'slug'  => 'cms',
                'count' => 0
            ),
            array(
                'name'  => 'imageresize',
                'slug'  => 'imageresize',
                'count' => 0
            ),
            array(
                'name'  => 'fileupload',
                'slug'  => 'fileupload',
                'count' => 0
            ),
            array(
                'name'  => 'ftp',
                'slug'  => 'ftp',
                'count' => 0
            ),
            array(
                'name'  => 'vagrant',
                'slug'  => 'vagrant',
                'count' => 0
            ),
            array(
                'name'  => 'filezilla',
                'slug'  => 'filezilla',
                'count' => 0
            ),
            array(
                'name'  => 'ide',
                'slug'  => 'ide',
                'count' => 0
            ),
            array(
                'name'  => 'editor',
                'slug'  => 'editor',
                'count' => 0
            ),
            array(
                'name'  => 'virtual',
                'slug'  => 'virtual',
                'count' => 0
            ),
            array(
                'name'  => 'interface',
                'slug'  => 'interface',
                'count' => 0
            ),
            array(
                'name'  => 'abstract',
                'slug'  => 'abstract',
                'count' => 0
            )
        ));
    }
}
