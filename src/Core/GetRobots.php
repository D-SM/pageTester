<?php

namespace Core;

class GetRobots {
    private $metaTag = 'robots';

    public function __construct()
    {
        $this->configJson = new CheckMetaTag($this->metaTag);
    }
}
