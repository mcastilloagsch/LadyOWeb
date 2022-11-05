<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['name'];
$confesion = $_POST['confesion'];

$urlcreate = APIGET("APIReligionObjInsert");
$curl = curl_init($urlcreate);

$objeto = array(
    "name" => $name,
    "confesion" => $confesion,
  );

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: religion.php");

?>