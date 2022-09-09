<?php
require_once '../authorization.php';


$id = $_POST['id'];
$name = $_POST['name'];
$unit_name = $_POST['unit_name'];
$small_team = $_POST['small_team'];


$id = intval($id);

$objeto = array(
    "id" => $id,
    "name" => $name,
    "unit_name" => $unit_name,
    "small_team" => $small_team,
  );

$urlcreate = "http://localhost:100/api/Branches/ObjUpdate/{token}/$id";
$curl = curl_init($urlcreate);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: branche.php");


?>