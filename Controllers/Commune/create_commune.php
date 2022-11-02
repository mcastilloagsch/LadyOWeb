<?php

require_once '../authorization.php';

$province_id = $_POST['IdProvince'];
$name = $_POST['CommuneName'];
$token = $_SESSION['user_token'];

function APIPOST(){

  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();

  while (!feof($file)) {
      $url[] = fgetcsv($file,null,';');
  }

  fclose($file);
  $APICommuneObjInsert = $url[7][1];
  $respuesta = $APICommuneObjInsert;
  return $respuesta;
}
$ruta = APIPOST();
$curl = curl_init($ruta);

$objeto = array(
  "IdProvince" => $province_id,
  "CommuneName" => $name
  
);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: commune.php");

?>