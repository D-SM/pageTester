<?php
namespace Core;


class CheckStatus
{
    private $parsedConfigJson;
    private $status = [];

    public function __construct()
    {
        $configJson = new GetConfig();
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
        $saveFile = new JsonWriter();
        $saveFile->setFile('status.json');
        $saveFile->setFileData($this->status);
        $saveFile->writeFile();
    }
}

new checkStatus();
