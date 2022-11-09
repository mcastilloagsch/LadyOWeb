<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

#$token = $_SESSION['user_token'];

$objeto = array(
  "IdBranch" => intval($_POST['IdBranch']),
  "BranchName" => $_POST['BranchName'],
  "UnitName" => $_POST['UnitName'],
  "TeamName" => $_POST['TeamName'],
);

$result = CURL_PUT("APIBranchesObjUpdate", $objeto, "Location: branche.php", "");

?>