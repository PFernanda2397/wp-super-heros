<?php

/* $data = json_decode( file_get_contents('https://api.mercadolibre.com/users/226384143/'), true );
echo $data['nickname']; */

$url = 'https://superheroapi.com/api/';
$api_arguments     = array(
    'api_key'  => '2957285757886055',
    'method'  => 'GET',
    'format'  => 'json',
    'user_id' => $user_id,
);


$url_par = array();
foreach ($api_arguments as $key => $value){
    $url_par[] = $key.'='.$value;
}
$url = $url.implode('&',  $url_par);


$response = file_get_contents($url);
if ($response) {
    print_r($response);
}
?>


