<?php

/**
 * Dashboard
 * Class HomeController
 * @author Sefa Karagöz
 */
class HomeController extends BaseController {

    public function __construct() {

        View::share('active', 'question');
    }

    /**
     * dashbaard sayfası
     * @return mixed
     */
    public function index() {

        // gönderileri sayfalama yaparak çekelim
        $posts = Post::with('tags', 'user')->orderBy('created_at', 'desc')->paginate(10);

        // çektiğimiz verileri view'a gönderelim
        return View::make('home.dashboard', compact('posts'));
    }
}