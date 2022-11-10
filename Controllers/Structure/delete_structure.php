<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdStructure" => intval($_GET["IdStructure"])
);

$result = CURL_DELETE("APIStructureObjDelete", $objeto, "Location: structure.php", "");

?>