<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdSocioEconomic" => intval($_GET["IdSocioEconomic"])
);

$result = CURL_DELETE("APISocioeconomicObjDelete", $objeto, "Location: socioeconomic.php", "");

?>