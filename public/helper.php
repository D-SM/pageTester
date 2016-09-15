<?php
/**
 * Created by PhpStorm.
 * User: webtailor
 * Date: 15.09.16
 * Time: 12:44
 */

class helper {

    static public function detectPath()
    {
        $path = '../log/';
        if (php_sapi_name() === 'cli') {
            $path = '/home/webtailor/PhpstormProjects/pageTester/log/';
        }
        return $path;
    }

    static public function detectConfigPath()
    {
        $path = '';
        if (php_sapi_name() === 'cli') {
            $path = '/home/webtailor/PhpstormProjects/pageTester/public/';
        }
        return $path;
    }
}