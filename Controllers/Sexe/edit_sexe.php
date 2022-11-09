<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdSex" => intval($_POST['IdSex']),
  "SexName" => $_POST['SexName']
);

$result = CURL_PUT("APISexObjUpdate", $objeto, "Location: sexe.php", "");

?>