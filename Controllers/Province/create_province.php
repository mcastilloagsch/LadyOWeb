<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$region_id = $_POST['IdRegion'];
$name = $_POST['ProvinceName'];

$objeto = array(  
  "IdRegion" => $_POST['IdRegion'],
  "ProvinceName" => $_POST['ProvinceName']
);

$result = CURL_POST("APIProvinceObjInsert", $objeto,"Location: province.php");

?>