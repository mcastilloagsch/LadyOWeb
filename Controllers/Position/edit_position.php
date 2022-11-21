<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
    "IdPositionType" => intval($_POST['IdPositionType']),
    "PositionTypeName" => $_POST['PositionTypeName'],
    "IdStructureType" => intval($_POST['IdStructureType']),
);

$result = CURL_PUT("APIPositionTypeObjUpdate", $objeto, "Location: position.php", "");

?>