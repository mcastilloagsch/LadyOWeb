<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['PositionName'];
$structure_type_id = $_POST['IdStructureType'];
$token = $_SESSION['user_token'];

$objeto = array(
  "PositionName" => $name,
  "IdStructureType" => $structure_type_id,
);

$result = CURL_POST("APIPositionObjInsert", $objeto,"Location: position.php");

?>