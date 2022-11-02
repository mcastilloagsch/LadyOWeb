<?php
require_once '../authorization.php';

$name = $_POST['SexName'];
$token = $_SESSION['user_token'];

function APIPOST(){
  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();

  while (!feof($file)) {
      $url[] = fgetcsv($file,null,';');
  }
  fclose($file);
  $APISexObjInsert = $url[37][1];
  $respuesta = $APISexObjInsert;
  return $respuesta;
}

$ruta = APIPOST();
$curl = curl_init($ruta);

$objeto = array(
  "SexName" => $name,
);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: sexe.php");

?>