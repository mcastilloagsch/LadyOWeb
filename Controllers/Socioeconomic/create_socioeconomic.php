<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "SocioEconomicName" => $_POST['SocioEconomicName']
);

$result = CURL_POST("APISocioeconomicObjInsert", $objeto,"Location: socioeconomic.php", "");

?>