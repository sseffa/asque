<?php

/**
 * Hakkımızda Bölümü
 * Class AboutController
 * @author Sefa Karagöz
 */
class AboutController extends \BaseController {

    /**
     * index sayfası
     * @return mixed
     */
    public function index() {

        return View::make('about.index')->with('active', 'about');
    }
}
