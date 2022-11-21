<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "StructureTypeName" => $_POST['StructureTypeName']
);

$result = CURL_POST("APIStructureTypeObjInsert", $objeto,"Location: structure_type.php", "");
?>