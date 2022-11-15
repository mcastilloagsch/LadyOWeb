<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdPosition" => intval($_GET['IdPosition'])
);

$result = CURL_DELETE("APIPositionObjDelete", $objeto, "Location: position.php");

?>