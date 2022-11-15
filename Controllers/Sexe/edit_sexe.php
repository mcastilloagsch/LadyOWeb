<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['IdSex'];
$name = $_POST['SexName'];
$token = $_SESSION['user_token'];

$id = intval($id);

$objeto = array(
  "IdSex" => $id,
  "SexName" => $name,
);

$result = CURL_PUT("APISexObjUpdate", $objeto, "Location: sexe.php", "");

?>