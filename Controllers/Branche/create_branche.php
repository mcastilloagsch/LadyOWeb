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

  "IdBranch": 0,
  "BranchName": $name,
  "UnitName": $unit_name,
  "TeamName": $small_team,
  "IsDeleted": false,
  "LastModificationDate": "01/01/1920",
  "LastModificationPerson": 0
);

$result = CURL_POST("APIBranchesObjInsert", $objeto,"Location: branche.php");

?>