<?php
// class to write the json

class jsonWriter {
    private $fileName;
    private $fileData;
    private $newFileData;

    public function setFile($fileName)
    {
        $this->fileName=$fileName;
    }
    public function setFileData($fileData)
    {
        $this->fileData=$fileData;
    }
    public function setNewFileData()
    {
        if (file_exists($this->fileName)) {
            $this->newFileData = json_decode(file_get_contents($this->fileName), true);
        }else {
            $this->newFileData= [];
        }
        $this->newFileData[time()] = $this->fileData;
    }

    public function writeFile()
    {
        file_put_contents($this->fileName, json_encode($this->newFileData));s
    }

}