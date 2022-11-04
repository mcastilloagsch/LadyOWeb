<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['id'];
$name = $_POST['name'];
$values = $_POST['values'];


$id = intval($id);

$objeto = array(
    "id" => $id,
    "name" => $name,
    "values" => $values,
  );

$urlcreate = APIGET("APISocioeconomicsObjUpdate")."/{token}/".$id;
$curl = curl_init($urlcreate);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: socioeconomic.php");


?>