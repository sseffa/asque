<?php namespace Asque\Providers;

use Illuminate\Support\ServiceProvider;

class SearchServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->bind('search', 'Asque\Search\Search');
    }
}
