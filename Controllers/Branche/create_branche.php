<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

#$token = $_SESSION['user_token'];

$objeto = array(
  "IdBranch": 0,
  "BranchName": $_POST['BranchName'];,
  "UnitName": $_POST['UnitName'],
  "TeamName": $_POST['TeamName'],
  "IsDeleted": false,
  "LastModificationDate": "01/01/1920",
  "LastModificationPerson": 0
);

$result = CURL_POST("APIBranchesObjInsert", $objeto,"Location: branche.php");

?>