<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdProvince" => intval($_GET['IdProvince'])
);

$result = CURL_DELETE("APIProvinceObjDelete", $objeto, "Location: province.php");

?>