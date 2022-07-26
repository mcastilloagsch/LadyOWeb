<?php
session_start();
if (!isset($_SESSION['user_token'])) {
  header("Location: ../../index.php");
  die();
}

$name = $_POST['name'];
$structure_type_id = $_POST['structure_type_id'];

$urlcreate = "http://localhost:100/api/Positions/ObjInsert/{token}";
$curl = curl_init($urlcreate);

$objeto = array(
    "name" => $name,
    "structure_type_id" => $structure_type_id,
  );

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: position.php");

?>