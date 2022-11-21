<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdProvince" => intval($_POST['IdProvince']),
  "CommuneName" => $_POST['CommuneName'],
  "ComCod" => $_POST['ComCod'],
);

$result = CURL_POST("APICommuneObjInsert", $objeto,"Location: commune.php", "");

?>