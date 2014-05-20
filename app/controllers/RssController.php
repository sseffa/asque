<?php

/**
 * RSS bölümü
 * Class RssController
 * @author Sefa Karagöz
 */
class RssController extends \BaseController {

    /**
     * index sayfası
     * verileri al, rss xml yapısına çevir, ekrana bas
     * @return mixed
     */
    public function index() {

        // en sondan başa doğru verileri alalım
        $items = Post::where('parent_id', 0)->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        // feeder sınıfının array formatına çevirelim
        $data = array();
        foreach ($items as $k => $v) {
            $data[] = array('title' => $v->title, 'description' => $v->body, 'link' => url($v->url));
        }

        // xml yapısına çevirilen veriyi ekranda gösterelim
        $feed = Feeder::feed($data);
        return Response::make($feed, 200, array('Content-Type' => 'text/xml'));
    }
}
