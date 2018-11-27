<?php

$data = array("num1" => 2,"num2" => 3);
//Encode JSON
$dataJson = json_encode($data);

$postString = "user=user & password=Password &data=" .
               urlencode($dataJson);

$contentLength = strlen($postString);

$header = array(
  'Content-Type: application/x-www-form-urlencoded',
  'Content-Length: ' . $contentLength
);

$url = "http://www.braingia.org/sum.php";

//Initialize curl resource
$ch = curl_init();

curl_setopt($ch,
    CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,
    CURLOPT_POSTFIELDS, $postString);
curl_setopt($ch,
    CURLOPT_HTTPHEADER, $header);

// USE curl_setopt to set the following options:
// CURLOPT_RETURNTRANSFER
// CURLOPT_URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);

//execute the curl call
$return = curl_exec($ch);

print $return;

curl_close($ch);

?>