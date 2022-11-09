<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['id'];
$name = $_POST['name'];
$values = $_POST['values'];


$id = intval($id);

$objeto = array(
    "id" => $id,
    "name" => $name,
    "values" => $values,
  );

$result = CURL_PUT("APISocioeconomicsObjUpdate", $objeto, "Location: socioeconomic.php", "/{token}/".$id);

?>