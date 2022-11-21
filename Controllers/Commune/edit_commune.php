<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdCommune" => intval($_POST['IdCommune']),
  "IdProvince" => intval($_POST['IdProvince']),
  "CommuneName" => $_POST['CommuneName'],
  "ComCod" => $_POST['ComCod']
);

$result = CURL_PUT("APICommuneObjUpdate", $objeto, "Location: commune.php", "");

?>