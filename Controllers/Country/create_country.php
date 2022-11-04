<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['CountryName'];

$API_URL=APIGET('APICountryObjInsert');
$curl = curl_init($API_URL);

$objeto = array(
 "CountryName" => $name
);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: country.php");

?>