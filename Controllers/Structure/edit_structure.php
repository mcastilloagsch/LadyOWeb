<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['id'];
$name = $_POST['name'];
$structure_type_id = $_POST['structure_type_id'];
$parent_id = $_POST['parent_id'];


$id = intval($id);

$objeto = array(
    "id" => $id,
    "name" => $name,
    "structure_type_id" => $structure_type_id,
    "parent_id" => $parent_id,
  );

$result = CURL_PUT("APIStructuresObjUpdate", $objeto, "Location: structure.php", "/{token}/".$id);

?>