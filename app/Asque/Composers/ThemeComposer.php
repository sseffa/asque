<?php namespace Asque\Composers;

use Sentry;

/**
 * Tema bilgisini layaout view'a gönderir
 * Class ThemeComposer
 * @package Asque\Composers
 * @author Sefa Karagöz
 */
class ThemeComposer {

    /**
     * Kullanıcı oturum açmışsa onun tema bilgisi al, yoksa default temanın adını gönder
     * @param $view
     */
    public function compose($view) {

        $theme = "Default";

        if (Sentry::check()) {

            $theme = Sentry::getUser()->theme;
        }

        if ($theme == null)
            $theme = "Default";

        $view->with('theme', $theme);
    }
}