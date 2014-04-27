<?php

class ThrottleTableSeeder extends Seeder {

   /**
    * Run the database seeding.
    *
    * @return void
    */
    public function run() {

        DB::table('throttle')->truncate();
    }
}
