<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

#token = $_SESSION['user_token'];

$objeto = array(
  "IdCommune" => intval($_POST['IdCommune']),
  "IdProvince" => $_POST['IdProvince'],
  "CommuneName" => $_POST['CommuneName']
);

$result = CURL_PUT("APICommuneObjUpdate", $objeto, "Location: commune.php", "");

?>