<?php namespace Asque\Search;

use Post;

/**
 * Class Search
 * @package Asque\Search
 * @author Sefa Karagöz
 */
class Search {

    /**
     * Gönderilerde arama yapar
     * @param $search
     * @return mixed
     */
    public function search($search) {

        $result = Post::search($search)->get()->toArray();
        return $result;
    }
}
