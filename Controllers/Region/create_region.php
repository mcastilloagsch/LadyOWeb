<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
    "IdRegion" => 0,
    "RegionName" => $_POST['RegionName'],
    "OrderSec" => $_POST['OrderSec'],
    "IsDeleted" => 0
  );

$result = CURL_POST("APIRegionObjInsert", $objeto,"Location: region.php","");

?>