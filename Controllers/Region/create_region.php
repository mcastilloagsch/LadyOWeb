<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['name'];
$geom = $_POST['geom'];
$token = $_SESSION['user_token'];

$objeto = array(
    "RegionName" => $name,
    #"geom" => $geom,
  );

$result = CURL_POST("APIRegionObjInsert", $objeto,"Location: region.php");

?>