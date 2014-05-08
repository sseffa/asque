<?php namespace Asque\Providers;

use Illuminate\Support\ServiceProvider;
use Asque\Feeder\Feeder;

class FeederServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->bind('feeder', 'Asque\Feeder\Feeder');
    }
}
