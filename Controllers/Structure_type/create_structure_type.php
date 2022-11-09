<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['name'];
$priority = $_POST['priority'];

$objeto = array(
    "name" => $name,
    "priority" => $priority,
  );

$result = CURL_POST("APIStructureTypeObjInsert", $objeto,"Location: structure_type.php");
?>