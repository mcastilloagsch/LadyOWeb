<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['SexName'];
$token = $_SESSION['user_token'];

$objeto = array(
  "SexName" => $name,
);

$result = CURL_POST("APISexObjInsert", $objeto,"Location: sexe.php");

?>