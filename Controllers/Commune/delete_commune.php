<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdCommune" => intval($_GET['IdCommune'])
);

CURL_DELETE($"APICommuneObjDelete", $objeto,"Location: commune.php");

?>