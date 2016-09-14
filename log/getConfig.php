<?php
// class to load and parse the config json

class getConfig {
    private $configJson;
    private $parsedConfigJson;
    private $error;

    public function getConfigJson(){
        if(file_exists('config.json')) {
            $this->configJson = file_get_contents('config.json');
        } else{
            $this->error = 'Please add configuration file';
        }

    }
    public function parseConfigJson(){
        $this->parsedConfigJson = json_decode($this->configJson, true);
    }

}