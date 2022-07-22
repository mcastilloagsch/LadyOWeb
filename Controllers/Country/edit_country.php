<?php 
$id = $_POST['id'];
$name = $_POST['name'];
$nationality = $_POST['nationality'];
$iso = $_POST['iso'];


$id = intval($id);

$objeto = array(
    "id" => $id,
    "name" => $name,
    "nationality" => $nationality,
    "iso" => $iso,
  );

$urlcreate = "http://localhost:100/api/Countries/ObjUpdate/{token}/$id";
$curl = curl_init($urlcreate);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: country.php");


?>