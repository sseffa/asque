<?php namespace Asque\Facades;

use Illuminate\Support\Facades\Facade;

class Feeder extends Facade {

    protected static function getFacadeAccessor() {

        return 'feeder';
    }
}
