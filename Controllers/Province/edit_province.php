<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdProvince" => intval($_POST['IdProvince']),
  "IdRegion" => intval($_POST['IdRegion']),
  "ProvinceName" => $_POST['ProvinceName'],
  "ProvCod" => $_POST['ProvCod']
);

$result = CURL_PUT("APIProvinceObjUpdate", $objeto, "Location: province.php", "");

?>