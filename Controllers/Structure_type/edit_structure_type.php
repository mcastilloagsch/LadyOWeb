<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['id'];
$name = $_POST['name'];
$priority = $_POST['priority'];


$id = intval($id);

$objeto = array(
    "id" => $id,
    "name" => $name,
    "priority" => $priority,
  );

$result = CURL_PUT("APIStructuresTypesObjUpdate", $objeto, "Location: structure_type.php", "/{token}/".$id);

?>