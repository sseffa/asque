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

        $this->comment('=====================================');

        $this->comment('');
        $this->info('  Veri tabanindaki tablolar siliniyor...');

        // drop tables
        Schema::dropIfExists('comments');
        Schema::dropIfExists('favorites');
        Schema::dropIfExists('maillist');
        Schema::dropIfExists('migrations');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('posts_tags');
        Schema::dropIfExists('post_types');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('votes');
        Schema::dropIfExists('groups');
        Schema::dropIfExists('throttle');
        Schema::dropIfExists('users');
        Schema::dropIfExists('users_groups');

        $this->comment('');
        $this->info('  Kurulum baslatiliyor...');

        $this->comment('');
        $this->info('  Guvenlik anahatari olusturuluyor...');

        // Güvenlik için key oluşturalım
        $this->call('key:generate');

        $this->comment('');
        $this->info(' Tablolar yukleniyor...');
        // Tabloları yükleyelim
        $this->call('migrate');

        $this->comment('');
        $this->info(' Tablolara veriler ekleniyor...');
        // Tabloları dolduralım
        $this->call('db:seed');

        $this->comment('');
        $this->info('  Kurulum basariyla tamamlandi...');
    }
}
