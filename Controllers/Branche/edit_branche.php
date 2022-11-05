<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['id'];
$name = $_POST['name'];
$unit_name = $_POST['unit_name'];
$small_team = $_POST['small_team'];
$token = $_SESSION['user_token'];


$id = intval($id);

$objeto = array(
  "id" => $id,
  "name" => $name,
  "unit_name" => $unit_name,
  "small_team" => $small_team,
);

$result = CURL_PUT("APIBranchesObjUpdate", $objeto, "Location: branche.php", "");

?>