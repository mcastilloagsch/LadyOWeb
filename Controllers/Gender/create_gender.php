<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['GenderName'];
$token = $_SESSION['user_token'];

$objeto = array(
    "GenderName" => $name,
  );

$result = CURL_POST("APIGenderObjInsert", $objeto,"Location: gender.php");

?>