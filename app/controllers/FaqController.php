<?php

/**
 * SSS bölümü
 * Class FaqController
 * @author Sefa Karagöz
 */
class FaqController extends \BaseController {

    /**
     * index sayfası
     * @return mixed
     */
    public function index() {

        return View::make('faq.index')->with('active', 'faq');
    }
}
