<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdRegion" => intval($_POST['IdRegion']),
  "RegionName" => $_POST['RegionName'],
  "OrderSec" => $_POST['OrderSec'],
  "RegCod" => $_POST['RegCod']
);

$result = CURL_PUT("APIRegionObjUpdate", $objeto, "Location: region.php", "");

?>