<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['IdSex'];
$name = $_POST['SexName'];
$token = $_SESSION['user_token'];

$id = intval($id);

$objeto = array(
  "IdSex" => $id,
  "SexName" => $name,
);

function APIPUT(){
  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();
  
  while (!feof($file)) {
      $url[] = fgetcsv($file,null,';');
  }
  fclose($file);
  $APISexObjUpdate = $url[38][1];
  $respuesta = $APISexObjUpdate;
  return $respuesta;
}

$ruta = APIGET("APISexObjUpdate");
$curl = curl_init($ruta);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto));
$result = curl_exec($curl);
header("Location: sexe.php");


?>