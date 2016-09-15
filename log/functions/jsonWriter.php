<?php

// class to write the json

class jsonWriter
{
    private $fileName;
    private $fileData;
    private $newFileData;

    public function setFile($fileName)
    {
        $this->fileName = $fileName;
    }

    public function setFileData($fileData)
    {
        $this->fileData = $fileData;
        $this->getDataFromFile();
    }

    public function getDataFromFile()
    {
        if (file_exists('../data/'.$this->fileName)) {
            $this->newFileData = json_decode(file_get_contents('../data/'.$this->fileName), true);
        } else {
            $this->newFileData = [];
        }
        $this->newFileData[time()] = $this->fileData;
    }

    public function writeFile()
    {
        file_put_contents($this->fileName, json_encode('../data/'.$this->newFileData, JSON_PRETTY_PRINT));
    }

}