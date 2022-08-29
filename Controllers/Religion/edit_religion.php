<?php
require_once '../authorization.php';

$id = $_POST['id'];
$confesion = $_POST['confesion'];


$id = intval($id);

$objeto = array(
    "id" => $id,
    "name" => $name,
    "confesion" => $confesion,
  );

$urlcreate = "http://localhost:100/api/Religions/ObjUpdate/{token}/$id";
$curl = curl_init($urlcreate);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: religion.php");


?>