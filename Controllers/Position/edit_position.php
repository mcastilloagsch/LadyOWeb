<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(

    "IdPosition" => intval($_POST['IdPosition']),
    "PositionName" => $_POST['PositionName'],
    "IdStructureType" => intval($_POST['IdStructureType'])
);

$result = CURL_PUT("APIPositionObjUpdate", $objeto, "Location: position.php", "");

?>