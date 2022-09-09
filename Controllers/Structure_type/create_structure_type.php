<?php
require_once '../authorization.php';

$name = $_POST['name'];
$priority = $_POST['priority'];

$urlcreate = "http://localhost:100/api/StructureType/ObjInsert/{token}";
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