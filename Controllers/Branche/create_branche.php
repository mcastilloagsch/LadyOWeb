<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "BranchName" => $_POST['BranchName'],
  "UnitName" => $_POST['UnitName'],
  "TeamName" => $_POST['TeamName'],  
  "LastModificationPerson" => $_POST['LastModificationPerson']
);

$result = CURL_POST("APIBranchObjInsert", $objeto,"Location: branche.php","");

?>