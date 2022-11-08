<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdSex" => intval($_GET['IdSex'])
);

$result = CURL_DELETE("APISexObjDelete", $objeto, "Location: sexe.php");

?>