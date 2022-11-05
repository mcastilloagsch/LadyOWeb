<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['name'];
$unit_name = $_POST['unit_name'];
$small_team = $_POST['small_team'];
$token = $_SESSION['user_token'];

$objeto = array(
  "name" => $name,
  "unit_name" => $unit_name,
  "small_team" => $small_team,
);

$result = CURL_POST("APIBranchesObjInsert", $objeto,"Location: branche.php");

?>