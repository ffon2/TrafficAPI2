
<html>
<title>TrafficAPI</title>
<form method = "GET">
<div>
    date: <input type = "text" name = "date_time"></input><br>
    st_y: <input type = "text" name = "st_y"></input><br>
    st_x: <input type = "text" name = "st_x"></input><br>
    en_y: <input type = "text" name = "en_y"></input><br>
    en_x: <input type = "text" name = "en_x"></input><br>
    toll: <input type = "text" name = "toll"></input><br> 
    <button type="submit">submit</button>
</div>
</form>

</html>
<?php
// $date_time = $_POST['date_time'];
// $st_y=$_POST['st_y'];
// $st_x=$_POST['st_x'];
// $en_y=$_POST['en_y'];
// $en_x=$_POST['en_x'];
// $toll=$_POST['toll'];
//$toll=$_POST[''];
$url = "https://apiplatform.rtic-thai.info:8243/logistics/1.0.0/odRouting";
$strAccessToken = "31cc9ed0-50f1-3b99-b4d1-8aca20de6213";
// $post_data =
//             $date_time="2017-04-26T08:00:00".
//             $st_y="13.8036917".
//             $st_x="100.5542416".
//             $en_y="13.8755595".
//             $en_x="100.6191486".
//             $toll="1";

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
var_dump($ch)."<br>";
var_dump($post_data)."<br>";
var_dump($_GET)."<br>";
