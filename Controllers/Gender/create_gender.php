<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

#$token = $_SESSION['user_token'];

$objeto = array(
    "GenderName" => $_POST['GenderName'],
  );

$result = CURL_POST("APIGenderObjInsert", $objeto,"Location: gender.php");

?>