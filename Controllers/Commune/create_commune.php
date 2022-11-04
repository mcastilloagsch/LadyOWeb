<?php

require_once '../authorization.php';
include_once '../../Common/functions.php';

$province_id = $_POST['IdProvince'];
$name = $_POST['CommuneName'];
$token = $_SESSION['user_token'];

$ruta = APIGET("APICommuneObjInsert");
$curl = curl_init($ruta);

$objeto = array(
  "IdProvince" => $province_id,
  "CommuneName" => $name
  
);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: commune.php");

?>