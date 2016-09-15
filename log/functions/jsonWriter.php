<?php

// class to write the json

class jsonWriter
{
    private $path;
    private $fileName;
    private $fileData;
    private $newFileData;

    function __construct()
    {
        $this->createPath();
    }


    public function setFile($fileName)
    {
        $this->fileName = $fileName;
    }

    public function setFileData($fileData)
    {
        $this->fileData = $fileData;
        $this->getDataFromFile();
    }

    public function createPath()
    {
        if (php_sapi_name() === 'cli') {
            $this->path = '/home/webtailor/PhpstormProjects/pageTester/log/';
        } else {
            $this->path = '../data/';
        }
    }

    public function getDataFromFile()
    {
//        if (file_exists($this->$path.$this->fileName)) {
        if (file_exists('../data/'.$this->fileName)) {
            $this->newFileData = json_decode(file_get_contents('../data/'.$this->fileName), true);
        } else {
            $this->newFileData = [];
        }
        $this->newFileData[time()] = $this->fileData;
    }

    public function writeFile()
    {
        file_put_contents('../data/'.$this->fileName, json_encode($this->newFileData, JSON_PRETTY_PRINT));
    }

}