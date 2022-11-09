<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['id'];
$confesion = $_POST['confesion'];


$id = intval($id);

$objeto = array(
    "id" => $id,
    "name" => $name,
    "confesion" => $confesion,
  );

$result = CURL_PUT("APIReligionObjUpdate", $objeto, "Location: religion.php", "/{token}/".$id);

?>