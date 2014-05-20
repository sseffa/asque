<?php

/**
 * Arama bölümü
 * Class SearchController
 * @author Sefa Karagöz
 */
class SearchController extends BaseController {

    public function index() {

        // aranan değeri alalım
        $q = Input::get('search');

        // arama sınıfına değeri gönderip sorgulama yapalım
        $result = Search::search($q);

        // dönen sonucu sayfalayarak geri dönelim
        $paginator = Paginator::make($result, count($result), 10);
        return View::make('search.index', compact('paginator', 'q'));
    }
}
