<?php namespace Asque\Composers;

use Sentry;

class ThemeComposer {

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