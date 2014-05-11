<?php

class RssController extends \BaseController {

    public function index() {

        $items = Post::where('parent_id', 0)->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        $data = array();
        foreach ($items as $k => $v) {
            $data[] = array('title' => $v->title, 'description' => $v->body, 'link' => url($v->url));
        }

        $feed = Feeder::feed($data);
        return Response::make($feed, 200, array('Content-Type' => 'text/xml'));
    }
}
