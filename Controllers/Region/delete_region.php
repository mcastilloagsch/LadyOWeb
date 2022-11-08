<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

#$token = $_SESSION['user_token'];

$objeto = array(
    "IdRegion" => intval($_GET['IdRegion'])
    #"RegionName" => $name,
    #"geom" => $geom,
  );

$result = CURL_PUT("APIRegionObjDelete", $objeto, "Location: region.php", "");

?>