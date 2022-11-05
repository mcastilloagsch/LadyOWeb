<?php

require_once '../authorization.php';
include_once '../../Common/functions.php';

$province_id = $_POST['IdProvince'];
$name = $_POST['CommuneName'];
$token = $_SESSION['user_token'];

$objeto = array(
  "IdProvince" => $province_id,
  "CommuneName" => $name
);

$result = CURL_POST("APICommuneObjInsert", $objeto,"Location: commune.php");

?>