<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdStructureType" => intval($_POST['IdStructureType']),
  "StructureTypeName" => $_POST['StructureTypeName']
);

$result = CURL_PUT("APIStructureTypeObjUpdate", $objeto, "Location: structure_type.php","");

?>