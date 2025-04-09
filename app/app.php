<?php 

define('API_PATH', 'http://localhost/PHP-API/api/?option=');

$result = api_request('status');

echo '<pre>';
// echo $result;
print_r($result);


function api_request($option){

    $client = curl_init(API_PATH . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($client);

    return json_decode($response, TRUE);
}

