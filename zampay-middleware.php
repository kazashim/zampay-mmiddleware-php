<?php
//Api User
$ConversationID = 'Marchant conversation ID';
$ThirdPartyID = 'ThirdPartyID';
$Password = 'marchant  password';
$Shortcode = 'marchant shortcode';

$zampay_api_user = $ConversationID . ':' . $ThirdPartyID . ':' .  $Password . ':' .  $Shortcode;

$curl = curl_init();

    curl_setopt($CURL, CURLOPT_URL, $url);
    curl_setopt($CURL, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($CURL, CURLOPT_ENCODING, "");
    curl_setopt($CURL, CURLOPT_MAXREDIRS, 10);        
    curl_setopt($CURL, CURLOPT_TIMEOUT, 0); 
    curl_setopt($CURL, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($CURL, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1); 
    curl_setopt($CURL, CURLOPT_CUSTOMREQUEST, "POST");


$response = curl_exec($curl);

curl_close($curl);
echo $response;



?>
curl_setopt_array($curl, array(