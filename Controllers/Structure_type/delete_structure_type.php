<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdStructureType" => intval($_GET["IdStructureType"])
);

$result = CURL_DELETE("APIStructureTypeObjDelete", $objeto, "Location: structure_type.php", "");

?>