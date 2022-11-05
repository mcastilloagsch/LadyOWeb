<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['name'];
$priority = $_POST['priority'];

$urlcreate = APIGET("APIStructureTypeObjInsert");
$curl = curl_init($urlcreate);

$objeto = array(
    "name" => $name,
    "priority" => $priority,
  );

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: structure_type.php");

?>