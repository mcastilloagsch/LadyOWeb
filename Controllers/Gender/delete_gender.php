<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_GET['IdGender'];

$id = intval($id);

$objeto = array(
  "IdGender" => $id
);

CURL_DELETE($"APIGenderObjDelete", $objeto,"Location: gender.php");

?>