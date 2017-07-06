<?php
$url = "https://apiplatform.rtic-thai.info:8243/logistics/1.0.0/odRouting";
$strAccessToken = true;
$post_data =
            $date_time="2017-04-26T08:00:00".
            $st_y="13.8036917".
            $st_x="100.5542416".
            $en_y="13.8755595".
            $en_x="100.6191486".
            $toll="1";

$header = array(
'Content-Type: application/json',
'Authorization: Bearer ' . $strAccessToken
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_GET, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$result = curl_exec($ch);
curl_close($ch);
echo "OK";
var_dump($result);
