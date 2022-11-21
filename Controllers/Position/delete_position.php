<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdPositionType" => intval($_GET['IdPositionType'])
);

$result = CURL_DELETE("APIPositionTypeObjDelete", $objeto, "Location: position.php","");

?>