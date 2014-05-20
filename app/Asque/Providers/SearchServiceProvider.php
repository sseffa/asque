<?php namespace Asque\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class SearchServiceProvider
 * @package Asque\Providers
 * @author Sefa Karagöz
 */
class SearchServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->bind('search', 'Asque\Search\Search');
    }
}
