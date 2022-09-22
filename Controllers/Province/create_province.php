<?php
require_once '../authorization.php';

$name = $_POST['name'];
$region_id = $_POST['region_id'];
$geom = $_POST['geom'];
$token = $_SESSION['user_token'];

function APIPOST($token){
  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();

  while (!feof($file)) {
      $url[] = fgetcsv($file,null,';');
  }
  fclose($file);
  $APIProvincesObjInsert = $url[23][1];
  $respuesta = $APIProvincesObjInsert . $token;
  return $respuesta;
}
$ruta = APIPOST($token);
$curl = curl_init($ruta);

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