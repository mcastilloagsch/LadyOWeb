<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['id'];
$name = $_POST['name'];
#$geom = $_POST['geom'];
$token = $_SESSION['user_token'];


$id = intval($id);

$objeto = array(
    "IdRegion" => $id,
    #"RegionName" => $name,
    #"geom" => $geom,
  );

$result = CURL_PUT("APIRegionObjDelete", $objeto, "Location: region.php", "");

?>