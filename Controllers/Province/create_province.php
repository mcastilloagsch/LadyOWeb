<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdRegion" => intval($_POST['IdRegion']),
  "ProvinceName" => $_POST['ProvinceName'],
  "ProvCod" => $_POST['ProvCod'],
);

$result = CURL_POST("APIProvinceObjInsert", $objeto,"Location: province.php", "");

?>