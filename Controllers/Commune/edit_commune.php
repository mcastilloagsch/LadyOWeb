<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['IdCommune'];
$province_id = $_POST['IdProvince'];
$name = $_POST['CommuneName'];
$token = $_SESSION['user_token'];

$id = intval($id);

$objeto = array(
  "IdCommune" => $id,
  "IdProvince" => $province_id,
  "CommuneName" => $name
);

$result = CURL_PUT("APICommuneObjUpdate", $objeto, "Location: commune.php", "");

?>