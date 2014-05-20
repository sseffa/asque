<?php namespace Asque\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Search sınıfını döner
 * Class Search
 * @package Asque\Facades
 * @author Sefa Karagöz
 */
class Search extends Facade {

    protected static function getFacadeAccessor() {

        return 'search';
    }
}
