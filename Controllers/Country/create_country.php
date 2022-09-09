<?php
require_once '../authorization.php';

$name = $_POST['name'];
$nationality = $_POST['nationality'];
$iso = $_POST['iso'];

$urlcreate = "http://localhost:100/api/Countries/ObjInsert/{token}";
$curl = curl_init($urlcreate);

$objeto = array(
    "name" => $name,
    "nationality" => $nationality,
    "iso" => $iso,
  );

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: country.php");

?>