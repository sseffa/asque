<?php namespace Asque\Composers;

use \Carbon\Carbon;
use Post;

/**
 * Sağ bölümde yer alan sidebar view'ına arşiv bilgilerini gönderir
 * Class ArchiveComposer
 * @package Asque\Composers
 * @author Sefa Karagöz
 */
class ArchiveComposer {

    /**
     * Verileri gönderen fonksiyon
     * @param $view
     */
    public function compose($view) {

        // tarihe göre postları gruplayarak çeker
        $postsByDate = Post::all()->groupBy(function ($date) {

            return Carbon::parse($date->created_at)->format('F-Y');
        })->toArray();

        // view'a aldığımız veriyi gönderelim
        $view->with('archives', $postsByDate);
    }
}

