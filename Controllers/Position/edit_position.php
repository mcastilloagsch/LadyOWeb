<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['IdPosition'];
$name = $_POST['PositionName'];
$structure_type_id = $_POST['IdStructureType'];
$token = $_SESSION['user_token'];

$id = intval($id);

$objeto = array(
    "IdPosition" => $id,
    "PositionName" => $name,
    "IdStructureType" => $structure_type_id,
);

$result = CURL_PUT("APIPositionObjUpdate", $objeto, "Location: position.php", "");

?>