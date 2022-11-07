<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_GET['IdPosition'];

$id = intval($id);

$objeto = array(
  "IdPosition" => $id
);

$result = CURL_DELETE("APIPositionObjDelete", $objeto, "Location: position.php");

?>