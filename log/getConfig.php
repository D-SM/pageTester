<?php
// class to load and parse the config json

class getConfig {
    private $configJson;
    public $parsedConfigJson;
    private $error;

    public function getConfigJson(){
        if(file_exists('config.json')) {
            $this->configJson = file_get_contents('config.json');
            $this->parseConfigJson();
            return $this->parsedConfigJson;
        } else {
             var_dump('Please add configuration file');
        }

        return null;
    }
    public function parseConfigJson(){
        $this->parsedConfigJson = json_decode($this->configJson, true);
    }

}
