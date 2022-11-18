<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdSocioEconomic" => intval($_POST['IdSocioEconomic']),
  "SocioEconomicName" => $_POST['SocioEconomicName']
);

$result = CURL_PUT("APISocioeconomicObjUpdate", $objeto, "Location: socioeconomic.php", "");

?>