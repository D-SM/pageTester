<?php
//class to check the metatags
class checkMetatag {
    private $configJson;
    private $parsedConfigJson;
    private $metaTags = [];

    public function __construct(){
        $this->configJson = new getConfig();
        $this->parsedConfigJson = $this->configJson->parseConfigJson();

        $this->getMetatags();
        $this->jsonWrite();
    }


    public function getMetatags()
    {
        foreach ($this->parsedConfigJson['sites'] as $key) {
            $allTags= get_meta_tags($key['url']);
            if ($allTags['robots'])) {
                $this->metaTags[] = [
                    'id' => $key['id'],
                    'time' => time(),
                    'keywords' => 1
                ];
            }else {
                $this->metaTags[] = [
                    'id' => $key['id'],
                    'time' => time(),
                    'keywords' => 0
                ];
            }
        }
    }

    public function jsonWrite()
    {
        if (file_exists('metaTags.json')) {
            $metaTagJson = json_decode(file_get_contents('metaTags.json'), true);
        }else {
            $metaTagJson = [];
        }
        $metaTagJson[time()] = $this->metaTags;
        file_put_contents('metaTags.json', json_encode($metaTagJson));
    }
}
$metatag = new checkMetatag();

