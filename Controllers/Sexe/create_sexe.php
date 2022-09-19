<?php
require_once '../authorization.php';

$name = $_POST['name'];
$token = $_SESSION['user_token'];

function APIPOST($token){
  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();

  while (!feof($file)) {
      $url[] = fgetcsv($file,null,';');
  }
  fclose($file);
  $APISexesObjInsert = $url[34][1];
  $respuesta = $APISexesObjInsert . $token;
  return $respuesta;
}

$ruta = APIPOST($token);
$curl = curl_init($ruta);


$objeto = array(
  "name" => $name,
);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: sexe.php");

?>