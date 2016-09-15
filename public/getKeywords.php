<?php

//require_once 'checkMetaTag.php';
require_once '/home/webtailor/PhpstormProjects/pageTester/public/checkMetaTag.php';
class getKeywords {
    private $metaTag = 'keywords';

    public function __construct()
    {
        $this->configJson = new checkMetaTag($this->metaTag);
    }
}
