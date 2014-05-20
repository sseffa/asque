<?php

/**
 * Yardım bölümü
 * Class HelpController
 * @author Sefa Karagöz
 */
class HelpController extends \BaseController {

    /**
     * index sayfası
     * @return mixed
     */
    public function index() {

        return View::make('help.index')->with('active', 'help');
    }
}
