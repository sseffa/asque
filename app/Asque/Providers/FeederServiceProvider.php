<?php namespace Asque\Providers;

use Illuminate\Support\ServiceProvider;
use Asque\Feeder\Feeder;

/**
 * Class FeederServiceProvider
 * @package Asque\Providers
 * @author Sefa Karagöz
 */
class FeederServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->bind('feeder', 'Asque\Feeder\Feeder');
    }
}
