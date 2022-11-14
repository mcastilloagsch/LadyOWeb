<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdGender" => intval($_POST['IdGender']),
  "GenderName" => $_POST['GenderName']
);

$result = CURL_PUT("APIGenderObjUpdate", $objeto, "Location: gender.php", "");

?>