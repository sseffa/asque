<?php namespace Asque\Composers;

use Tag;

class TagComposer {

    public function compose($view) {

        $tags = Tag::all();
        $view->with('tags', $tags);
    }
}