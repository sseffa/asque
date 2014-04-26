<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class AppCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'app:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire() {

        // drop tables
        /*
        Schema::dropIfExists('groups');
        Schema::dropIfExists('throttle');
        Schema::dropIfExists('users');
        Schema::dropIfExists('users_groups');
        */

        $this->comment('=====================================');
        $this->comment('');
        $this->info('  Kurulum baslatiliyor...');

        // Generate the Application Encryption key
        $this->call('key:generate');

        // Create the migrations table
        $this->call('migrate:install');

        // Run the Sentry Migrations
        $this->call('migrate', array('--package' => 'cartalyst/sentry'));

        // Run the Migrations
        $this->call('migrate');

        // Create the default user and default groups.
        $this->sentryRunner();

        // Seed the tables with dummy data
        $this->call('db:seed');

        $this->comment('');
        $this->info('  Kurulum basariyla tamamlandi...');
    }
}
