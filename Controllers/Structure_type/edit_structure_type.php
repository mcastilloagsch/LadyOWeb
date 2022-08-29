<?php
require_once '../authorization.php';

$id = $_POST['id'];
$name = $_POST['name'];
$priority = $_POST['priority'];


$id = intval($id);

$objeto = array(
    "id" => $id,
    "name" => $name,
    "priority" => $priority,
  );

$urlcreate = "http://localhost:100/api/StructureType/ObjUpdate/{token}/$id";
$curl = curl_init($urlcreate);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: structure_type.php");


?>