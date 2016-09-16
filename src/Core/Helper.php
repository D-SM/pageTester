<?php

namespace Core;

class Helper {

    static public function detectPath()
    {
        $path = __DIR__.'/../../app/log/';
        if (php_sapi_name() === 'cli') {
            $path = __DIR__.'/../../app/log/';
        }
        return $path;
    }

    static public function detectConfigPath()
    {
        $path = __DIR__.'/../../static/config/';
        if (php_sapi_name() === 'cli') {
            $path = __DIR__.'/../../static/config/';
        }
        return $path;
    }
}