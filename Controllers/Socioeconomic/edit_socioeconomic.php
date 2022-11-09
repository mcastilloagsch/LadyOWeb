<?php
require_once '../authorization.php';

$id = $_POST['id'];
$name = $_POST['name'];
$values = $_POST['values'];
$token = $_SESSION['user_token'];

$id = intval($id);

$objeto = array(
  "id" => $id,
  "name" => $name,
  "values" => $values,
);

function APIPUT($token){
  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();
  
  while (!feof($file)) {
      $url[] = fgetcsv($file,null,';');
  }
  fclose($file);
  $APISocioeconomicsObjUpdate = $url[39][1];
  $respuesta = $APISocioeconomicsObjUpdate . $token;
  return $respuesta;
}
$ruta = APIPUT($token);
$curl = curl_init($ruta);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: socioeconomic.php");


?>