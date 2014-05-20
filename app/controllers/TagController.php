<?php

/**
 * Etiket bölümü
 * Class TagController
 * @author Sefa Karagöz
 */
class TagController extends \BaseController {

    public function __construct() {

        View::share('active', 'tag');
    }

    /**
     * Tüm etikerleri göster
     * @return Response
     */
    public function all() {

        $tags = Tag::with(array('posts'=>function($query){

                $query->count();
            }))->paginate(20);

        return View::make('tag.all', compact('tags'));
    }

    /**
     *
     * @param  int $id
     * @return Response
     */
    public function show($slug) {

        /*
        $posts = Post::with(array('tags' => function ($query) use ($slug) {
            $query->where('slug', $slug);
        }))->paginate(10)->toArray();
        */

        $tag = Tag::where('slug', '=', $slug)->first();
        $posts = $tag->posts()->paginate(10);

        return View::make('tag.index', compact('posts'));
    }
}
