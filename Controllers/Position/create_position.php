<?php
require_once '../authorization.php';

$name = $_POST['PositionName'];
$structure_type_id = $_POST['IdStructureType'];
$token = $_SESSION['user_token'];

function APIPOST(){
  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();

  while (!feof($file)) {
      $url[] = fgetcsv($file,null,';');
  }
  fclose($file);
  $APIPositionObjInsert = $url[22][1];
  $respuesta = $APIPositionObjInsert;
  return $respuesta;
}

$ruta = APIPOST();
$curl = curl_init($ruta);

$objeto = array(
  "PositionName" => $name,
  "IdStructureType" => $structure_type_id,
);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: position.php");

?>