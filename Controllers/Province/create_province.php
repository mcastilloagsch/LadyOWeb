<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$region_id = $_POST['IdRegion'];
$name = $_POST['ProvinceName'];
$token = $_SESSION['user_token'];

$objeto = array(  
  "IdRegion" => $region_id,
  "ProvinceName" => $name
);

$result = CURL_POST("APIProvinceObjInsert", $objeto,"Location: province.php");

?>