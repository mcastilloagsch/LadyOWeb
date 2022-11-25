<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdRegion" => intval($_GET['IdRegion']),
  "RegionName" => $_GET['RegionName']
);

$result = CURL_DELETE("APIRegionObjDelete", $objeto, "Location: region.php", "");

?>