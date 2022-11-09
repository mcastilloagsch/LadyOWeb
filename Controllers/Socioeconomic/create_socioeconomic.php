<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['name'];
$values = $_POST['values'];

$objeto = array(
    "name" => $name,
    "values" => $values,
  );

$result = CURL_POST("APISocioeconomicsObjInsert", $objeto,"Location: socioeconomic.php");

?>