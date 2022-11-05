<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['IdGender'];
$name = $_POST['GenderName'];
$token = $_SESSION['user_token'];

$id = intval($id);

$objeto = array(
    "IdGender" => $id,
    "GenderName" => $name,
  );

$result = CURL_PUT("APIGenderObjUpdate", $objeto, "Location: gender.php", "");

?>