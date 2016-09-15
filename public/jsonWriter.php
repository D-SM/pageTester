<?php

// class to write the json

require_once '/home/webtailor/PhpstormProjects/pageTester/public/helper.php';

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
       $this->path = helper::detectPath();
    }

    public function getDataFromFile()
    {
        if (file_exists($this->path.$this->fileName)) {
            $this->newFileData = json_decode(file_get_contents($this->path.$this->fileName), true);
        } else {
            $this->newFileData = [];
        }
        $this->newFileData[time()] = $this->fileData;
    }

    public function writeFile()
    {
        file_put_contents($this->path.$this->fileName, json_encode($this->newFileData, JSON_PRETTY_PRINT));
    }

}