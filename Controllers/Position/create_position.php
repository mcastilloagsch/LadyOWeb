<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(

  "PositionName" => $_POST['PositionName'],
  "IdStructureType" => $_POST['IdStructureType'],
);

$result = CURL_POST("APIPositionObjInsert", $objeto,"Location: position.php");

?>