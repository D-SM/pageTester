<?php

require_once 'checkMetaTag.php';

class getRobots {
    private $metaTag = 'robots';

    public function __construct()
    {
        $this->configJson = new checkMetaTag($this->metaTag);
    }
}
$metaTagGet = new getRobots();
