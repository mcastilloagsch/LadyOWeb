<?php
require_once '../authorization.php';

$id = $_POST['id'];
$name = $_POST['name'];
$priority = $_POST['priority'];
$token = $_SESSION['user_token'];

$id = intval($id);

$objeto = array(
  "id" => $id,
  "name" => $name,
  "priority" => $priority,
);

function APIPUT($token){
  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();
  
  while (!feof($file)) {
      $url[] = fgetcsv($file,null,';');
  }
  fclose($file);
  $APIStructureTypeObjUpdate = $url[47][1];
  $respuesta = $APIStructureTypeObjUpdate . $token;
  return $respuesta;
}
$ruta = APIPUT($token);
$curl = curl_init($ruta);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto));
$result = curl_exec($curl);
header("Location: structure_type.php");


?>