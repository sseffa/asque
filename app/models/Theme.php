<?php

class Theme {

    public function getThemes() {

        $dir = public_path() . '/themes/';
        $result = scandir($dir);

        $files = array();
        foreach ($result as $file) {
            if (substr($file, 0, 1) == "." || substr($file, 0, 1) == '_') continue;

            if($file == "fonts") continue;

            $files[$file] = $file;
        }

        return $files;
    }
}
