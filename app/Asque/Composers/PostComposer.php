<?php namespace Asque\Composers;

use Post;

class PostComposer {

    public function compose($view) {

        $posts = Post::take(5)->orderBy('created_at', 'desc')->get();
        $view->with('posts', $posts);
    }
}

