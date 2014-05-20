<?php namespace Asque\Composers;

use Post;

/**
 * Sidebar view'son 5 postu gönderir
 * Class PostComposer
 * @package Asque\Composers
 * @author Sefa Karagöz
 */
class PostComposer {

    /**
     * Son 5 postu view a gönderir
     * @param $view
     */
    public function compose($view) {

        $posts = Post::take(5)->where('post_type_id', 1)->where('parent_id', 0)->orderBy('created_at', 'desc')->get();
        $view->with('posts', $posts);
    }
}

