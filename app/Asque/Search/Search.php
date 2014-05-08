<?php namespace Asque\Search;

use Post;

class Search {

    public function search($search) {

        $result = Post::search($search)->get()->toArray();

        return $result;
    }
}
