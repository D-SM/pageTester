<?php
// class to check and save the status of the page

require_once 'getConfig.php';
require_once 'jsonWriter.php';

//error_reporting(0);
//@ini_set('display_errors', 0);

class checkStatus
{
    private $parsedConfigJson;
    private $status = [];

    public function __construct()
    {
        $configJson = new getConfig();
        $this->parsedConfigJson = $configJson->getConfigJson();
        $this->getStatus();
    }

    public function getStatus()
    {
        foreach ($this->parsedConfigJson['sites'] as $key) {
            $pageData = file_get_contents($key['url']);
            if ($pageData !== false) {
                $this->status[] = [
                    'id' => $key['id'],
                    'time' => time(),
                    'status' => 1
                ];
            } else {
                $this->status[] = [
                    'id' => $key['id'],
                    'time' => time(),
                    'status' => 0
                ];
            }
        }
        $this->jsonWrite();
    }

    public function jsonWrite()
    {
        $saveFile = new jsonWriter();
        $saveFile->setFile('status.json');
        $saveFile->setFileData($this->status);
        $saveFile->writeFile();
    }
}

$checkStatus = new checkStatus();
