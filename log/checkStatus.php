<?php
// class to check and save the status of the page
class checkStatus {

    private $parsedConfigJson;
    private $status = [];
    private $writeFile;
    private $error;

    public function __construct(){
        $configJson = new getConfig();
        $this->parsedConfigJson = $configJson->parseConfigJson();
        $this->getStatus();
        $this->jsonWrite();
    }

    //Checking the url status
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
    }

    //Writing the status.json
    public function jsonWrite()
    {
        $this->js = new getConfig();

        if (file_exists('status.json')) {
            $statusJson = json_decode(file_get_contents('status.json'), true);
        }else {
            $statusJson = [];
        }
        $statusJson[time()] = $this->status;
        file_put_contents('status.json', json_encode($statusJson));
    }

}

$checkStatus = new checkStatus();
$checkStatus->getMetatags();

echo '<pre>';
print_r($metaTags);
echo  '</pre>';

//echo date('m/d/Y H:i:s', $date);
//file_put_contents();
//    echo '<pre>';
//    print_r($value['url']);
//    echo  '</pre>';

