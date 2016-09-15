<?php

require_once 'checkMetaTag.php';

class getKeywords {
    private $metaTag = 'keywords';

    public function __construct()
    {
        $this->configJson = new checkMetaTag($this->metaTag);
    }
}
$metaTagGet = new getKeywords();
