<?php

class SearchController extends BaseController {

    public function index() {

        $q = Input::get('search');

        $result = Search::search($q);
        $paginator = Paginator::make($result, count($result), 10);
        return View::make('search.index', compact('paginator', 'q'));
    }
}
