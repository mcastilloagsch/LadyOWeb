<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(    
  "RegionName" => $_POST['RegionName'],
  "OrderSec" => intval($_POST['OrderSec']),
  "RegCod" => $_POST['RegCod']    
);

$result = CURL_POST("APIRegionObjInsert", $objeto,"Location: region.php","");

?>