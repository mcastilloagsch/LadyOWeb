<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdReligion" => intval($_POST['IdReligion']),
  "ReligionName" => $_POST['ReligionName'],
  "Confesion" => $_POST['Confesion']
);

$result = CURL_PUT("APIReligionObjUpdate", $objeto, "Location: religion.php", "");

?>

?>