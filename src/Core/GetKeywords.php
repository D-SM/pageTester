<?php

namespace Core;

class GetKeywords {
    private $metaTag = 'keywords';

    public function __construct()
    {
        $this->configJson = new CheckMetaTag($this->metaTag);
    }
}
