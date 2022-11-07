<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_GET['IdProvince'];

$id = intval($id);

$objeto = array(
  "IdProvince" => $id
);

$result = CURL_DELETE("APIProvinceObjDelete", $objeto, "Location: province.php");

?>