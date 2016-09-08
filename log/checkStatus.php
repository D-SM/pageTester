<?php

// ODCZYT JSONA Z SERWISAMI
$configJson = file_get_contents('config.json');
$parsedConfig = json_decode($configJson, true);
$status = [];

//SPRAWDZANIE CZY URL Z JSON ODPOWIADA
foreach($parsedConfig['sites'] as $key) {
    $pageData = @file_get_contents($key['url']);
        if ($pageData !== false) {
            $status[$key['id']] = 'OK';
        } else {
            $status[$key['id']] = 'NOT OK';
        }
}
//ZAPIS JSONA ZE STATUSAMI
file_put_contents('status.json', json_encode($status));


//ZAPIS HISTORII STATUSÓW
$id=0;
foreach($status as $currentStatus) {
    $id ++;
    $date = new DateTime();
    $fileName = ('History/' . $id . '.json');
    if (file_exists($filename)) {
        $history = json_decode(file_get_contents($fileName), true);
    } else {
        $history = fwrite($fileName);
    }
    $history[] = [
        'timeStamp' => $date->getTimestamp(),
        'status' => $currentStatus
    ];
    file_put_contents($fileName, json_encode($history));

}

//    echo '<pre>';
//    print_r($currentStatus);
//    echo  '</pre>';

//    $historyStatus['timeStamp'] = $date->getTimestamp();
//    $historyStatus['status'] = $currentStatus;
//    file_put_contents($currentStatus['id'].'.json', json_encode($historyStatus));
//    echo '<pre>';
//    print_r($historyStatus);
//    echo  '</pre>';

//echo date('m/d/Y H:i:s', $date);
//file_put_contents();

//    echo '<pre>';
//    print_r($status);
//    echo  '</pre>';
//    echo '<pre>';
//    print_r($parsedConfig);
//    echo  '</pre>';
//    var_dump($data);
//    echo '<pre>';
//    print_r($data);
//    echo  '</pre>';
//    echo '<pre>';
//    print_r($value['url']);
//    echo  '</pre>';

//    echo($key);
//    var_dump($value);


//    //pobranie i odczytanie history_ID.json
//    //stworzenie tablicy z history_ID.json
//    //pobieranie strony i jej zawartości
//    $data = file_get_contents(value['url']);
//    var_dump($data);

//    //warunek w zalezności od tego jaki jest status
//    //zwróc jakąś wartość do zmiennej
//    if ($data) {
//        //STATUS ONLINE to dopisz nową pozycję
//        $return['url'] = 'OK';
//    } else {
//        //STATUS OFFLINE to dopisz nową pozycję
//    }
//
//    //zapis do history_ID.json
//    file_put_contents();
//    var_dump($http_response_header);
//}
//var_dump($this->servicesJSON);
//
//json_encode($status);
//file_put_contents();
////zapis do status.json
