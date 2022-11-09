<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['name'];
$structure_type_id = $_POST['structure_type_id'];
$parent_id = $_POST['parent_id'];

$objeto = array(
    "name" => $name,
    "structure_type_id" => $structure_type_id,
    "parent_id" => $parent_id,
  );

$result = CURL_POST("APIStructuresObjInsert", $objeto,"Location: structure.php");

?>