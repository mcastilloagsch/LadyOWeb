<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_GET['IdCommune'];

$id = intval($id);

$objeto = array(
  "IdCommune" => $id
);

CURL_DELETE($"APICommuneObjDelete", $objeto,"Location: commune.php");

?>