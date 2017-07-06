<?php

$url = "https://apiplatform.rtic-thai.info:8243/logistics/1.0.0/odRouting";
$strAccessToken = "31cc9ed0-50f1-3b99-b4d1-8aca20de6213";

$header = array(
'Content-Type: application/json',
'Authorization: Bearer ' . $strAccessToken
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_GET, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $_GET);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$result = curl_exec($ch);
curl_close($ch);
echo "OK";
var_dump($result)."<br>";
//var_dump($ch)."<br>";
var_dump($post_data)."<br>";
var_dump($_GET)."<br>";
