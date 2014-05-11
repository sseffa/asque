<?php namespace Asque\Composers;

use Post;

class PostComposer {

    public function compose($view) {

        $posts = Post::take(5)->where('post_type_id', 1)->where('parent_id', 0)->orderBy('created_at', 'desc')->get();
        $view->with('posts', $posts);
    }
}

