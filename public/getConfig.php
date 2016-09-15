<?php

// class to load and parse the config json
//require_once '/home/webtailor/PhpstormProjects/pageTester/public/helper.php';
require_once 'helper.php';

class getConfig
{
    private $configJson;
    public $parsedConfigJson;
    private $path;

    function __construct()
    {
        $this->createPath();
        $this->getConfigJson();
    }

    public function getConfigJson()
    {
        if (file_exists($this->path . 'config.json')) {
            $this->configJson = file_get_contents($this->path . 'config.json');
            $this->parseConfigJson();
            return $this->parsedConfigJson;
        } else {
            var_dump('Please add configuration file');
        }
        return null;
    }

    public function createPath()
    {
       $this->path = helper::detectConfigPath();
    }

    public function parseConfigJson()
    {
        $this->parsedConfigJson = json_decode($this->configJson, true);
    }

}