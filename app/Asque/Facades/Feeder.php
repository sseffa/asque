<?php namespace Asque\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Feeder sınıfını döner
 * Class Feeder
 * @package Asque\Facades
 * @author Sefa Karagöz
 */
class Feeder extends Facade {

    protected static function getFacadeAccessor() {

        return 'feeder';
    }
}
