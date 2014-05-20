<?php

/**
 * Tema model sınıfı
 * Class Theme
 * @author Sefa Karagöz
 */
class Theme {

    /**
     * Sistemde varolan temaları döner
     * @return array
     */
    public function getThemes() {

        // themes klasöründe tarama yap
        $dir = public_path() . '/themes/';
        $result = scandir($dir);

        // bulanan klasörler birer temadır
        $files = array();
        foreach ($result as $file) {
            if (substr($file, 0, 1) == "." || substr($file, 0, 1) == '_') continue;

            if($file == "fonts") continue;

            $files[$file] = $file;
        }

        return $files;
    }
}
