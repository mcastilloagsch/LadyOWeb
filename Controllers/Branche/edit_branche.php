<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdBranch" => intval($_POST['IdBranch']),
  "BranchName" => $_POST['BranchName'],
  "UnitName" => $_POST['UnitName'],
  "TeamName" => $_POST['TeamName'],
  "LastModificationPerson" => $_POST['LastModificationPerson'],
);

$result = CURL_PUT("APIBranchObjUpdate", $objeto, "Location: branche.php", "");

?>