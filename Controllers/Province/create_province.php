<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$region_id = $_POST['IdRegion'];
$name = $_POST['ProvinceName'];
$token = $_SESSION['user_token'];

$ruta = APIGET("APIProvinceObjInsert");
$curl = curl_init($ruta);

$objeto = array(  
  "IdRegion" => $region_id,
  "ProvinceName" => $name
);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: province.php");

?>