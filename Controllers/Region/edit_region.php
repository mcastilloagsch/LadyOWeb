<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['id'];
$name = $_POST['name'];
$geom = $_POST['geom'];
$token = $_SESSION['user_token'];


$id = intval($id);

$objeto = array(
    "id" => $id,
    "name" => $name,
    "geom" => $geom,
  );

$result = CURL_PUT("APIRegionObjUpdate", $objeto, "Location: region.php", "");

?>