<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['name'];
$confesion = $_POST['confesion'];

$objeto = array(
    "name" => $name,
    "confesion" => $confesion,
  );

$result = CURL_POST("APIReligionObjInsert", $objeto,"Location: religion.php");

?>