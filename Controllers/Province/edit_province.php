<?php

require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['IdProvince'];
$region_id = $_POST['IdRegion'];
$name = $_POST['ProvinceName'];
$token = $_SESSION['user_token'];


$id = intval($id);

$objeto = array(
    "IdProvince" => $id,    
    "IdRegion" => $region_id,
    "ProvinceName" => $name
  );

$result = CURL_PUT("APIProvinceObjUpdate", $objeto, "Location: province.php", "");

?>