<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['name'];
$geom = $_POST['geom'];
$token = $_SESSION['user_token'];

$ruta = APIGET("APIRegionObjInsert");
$curl = curl_init($ruta);

$objeto = array(
    "name" => $name,
    #"geom" => $geom,
  );

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: region.php");

?>