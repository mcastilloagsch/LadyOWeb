<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_GET['IdSex'];

$id = intval($id);

$objeto = array(
  "IdSex" => $id
);

$result = CURL_DELETE("APISexObjDelete", $objeto, "Location: sexe.php");

?>