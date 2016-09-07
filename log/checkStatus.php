<?php
//class checkStatus {
//    private $servicesJSON = 'http://localhost:63342/pageTester/log/test.json';
//    private $currentStatus;
//    public function __construct(){
//        $this->currentStatus = json_decode($this->servicesJSON)
//    }
//    private function setFileName(){
//
//    }
//    private function createJson(){
//        file_put_contents($)
//    }
//    private function getPageStatus(){
//        foreach($this->servicesJSON as key => value);
//        file_get_contents(json)
//    }

//$servicesJSON = 'test.json';
file_get_contents('test.json');
$servicesJson = json_decode('test.json', true);

$status = [];

foreach($servicesJson as $key => $value){
    $data = file_get_contents($value['url']);

    if ($data) {
        //STATUS ONLINE
        $return['url'] = 'OK';
    } else {
        //STATUS OFFLINE
    }

    var_dump($http_response_header);
}
var_dump($this->servicesJSON);

json_encode($status);
file_put_contents();
