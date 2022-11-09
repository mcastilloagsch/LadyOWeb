<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "ReligionName" => $_POST['ReligionName'],
  "Confesion" => $_POST['Confesion']
);

$result = CURL_POST("APIReligionObjInsert", $objeto,"Location: religion.php");

?>