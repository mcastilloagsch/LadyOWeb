<?php
require_once '../authorization.php';

$name = $_POST['name'];
$confesion = $_POST['confesion'];
$token = $_SESSION['user_token'];

function APIPOST($token){
  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();

  while (!feof($file)) {
      $url[] = fgetcsv($file,null,';');
  }
  fclose($file);
  $APIBranchesObjInsert = $url[30][1];
  $respuesta = $APIBranchesObjInsert . $token;
  return $respuesta;
}

$ruta = APIPOST($token);
$curl = curl_init($ruta);

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