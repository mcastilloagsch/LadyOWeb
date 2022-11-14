<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdGender" => intval($_GET['IdGender'])
);

$result = CURL_DELETE("APIGenderObjDelete", $objeto,"Location: gender.php","");

?>