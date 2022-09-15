<?php

require_once '../authorization.php';

$id = $_POST['id'];
$name = $_POST['name'];
$region_id = $_POST['region_id'];
$geom = $_POST['geom'];
$token = $_SESSION['user_token'];


$id = intval($id);

$objeto = array(
    "id" => $id,
    "name" => $name,
    "region_id" => $region_id,
    "geom" => $geom,
  );

  function APIPUT($token){
    $file = fopen( '../../bin/urls_api.config', "r");
    $url = array();
    
    while (!feof($file)) {
        $url[] = fgetcsv($file,null,';');
    }
    fclose($file);
    $APIProvincesObjUpdate = $url[24][1];
    $respuesta = $APIProvincesObjUpdate . $token;
    return $respuesta;
  }
  $ruta = APIPUT($token);
  $curl = curl_init($ruta);
  
  $jsonDataEncoded = json_encode($objeto);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
  curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto));
  $result = curl_exec($curl);
header("Location: province.php");

?>