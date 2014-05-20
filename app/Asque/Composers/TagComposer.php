<?php namespace Asque\Composers;

use Tag;

/**
 * Sidebar view'a tag bilgilerini gönderir
 * Class TagComposer
 * @package Asque\Composers
 * @author Sefa Karagöz
 */
class TagComposer {

    /**
     * Tüm tagleri alıp view'a gönderir
     * @param $view
     */
    public function compose($view) {

        $tags = Tag::all();
        $view->with('tags', $tags);
    }
}