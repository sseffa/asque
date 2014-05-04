<?php namespace Asque\Composers;

use \Carbon\Carbon;
use Post;

class ArchiveComposer {

    public function compose($view) {

        $postsByDate = Post::all()->groupBy(function ($date) {

            return Carbon::parse($date->created_at)->format('Y-F');
        })->toArray();

        $view->with('archives', $postsByDate);
    }
}

