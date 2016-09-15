<?php
//class to check the metatags

require_once 'getConfig.php';
require_once 'jsonWriter.php';

class checkMetaTag
{
    private $parsedConfigJson;
    private $allMetaTags = [];
    private $currentMetaTagContainer = [];

    public function __construct($metaTag)
    {
        $this->configJson = new getConfig();
        $this->parsedConfigJson = $this->configJson->getConfigJson();
        $this->getAllMetaTags();
        $this->checkMetaTag($metaTag);
    }

    public function getAllMetaTags()
    {
        foreach ($this->parsedConfigJson['sites'] as $key) {
            $this->allMetaTags[$key['id']] = get_meta_tags($key['url']);
        }
    }

    Public function checkMetaTag($metaTag)
    {
        foreach ($this->allMetaTags as $key => $value) {
            if (!empty ($value[$metaTag]) AND $value[$metaTag] === $this->parsedConfigJson['sites'][$key - 1][$metaTag]) {
                $this->currentMetaTagContainer[] = [
                    'id' => $key,
                    'time' => time(),
                    $metaTag . 'Exists' => 1,
                    $metaTag . 'Match' => 1,
                    $metaTag . 'Values' => $value[$metaTag]
                ];
            } else {
                $this->currentMetaTagContainer[] = [
                    'id' => $key,
                    'time' => time(),
                    $metaTag . 'Exists' => 0,
                    $metaTag . 'Match' => 0,
                    $metaTag . 'Values' => $value[$metaTag]
                ];
            }
        }
        $this->saveToFile($metaTag, $this->currentMetaTagContainer);
    }

    public function saveToFile($fileName, $fileContent)
    {
        $saveFile = new jsonWriter();
        $saveFile->setFile($fileName . '.json');
        $saveFile->setFileData($fileContent);
        $saveFile->writeFile();
    }
}
//var_dump(time("Y-m-d | h:i:sa"));
