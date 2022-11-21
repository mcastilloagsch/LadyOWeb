<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "PositionTypeName" => $_POST['PositionTypeName'],
  "IdStructureType" => intval($_POST['IdStructureType']),
);

$result = CURL_POST("APIPositionTypeObjInsert", $objeto,"Location: position.php", "");

?>