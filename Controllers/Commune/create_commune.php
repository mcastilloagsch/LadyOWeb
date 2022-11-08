<?php

require_once '../authorization.php';
include_once '../../Common/functions.php';

$province_id = $_POST['IdProvince'];
$name = ;
$token = $_SESSION['user_token'];

$objeto = array(
  "IdCommune" => 0,
  "IdProvince" => intval($_POST['IdProvince']),
  "CommuneName" => $_POST['CommuneName']
);

$result = CURL_POST("APICommuneObjInsert", $objeto,"Location: commune.php");

?>