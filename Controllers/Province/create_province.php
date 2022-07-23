<?php 
$name = $_POST['name'];
$region_id = $_POST['region_id'];
$geom = $_POST['geom'];

$urlcreate = "http://localhost:100/api/Provinces/ObjInsert/{token}";
$curl = curl_init($urlcreate);

$objeto = array(
    "name" => $name,
    "region_id" => $region_id,
    "geom" => $geom,
  );

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: province.php");

?>