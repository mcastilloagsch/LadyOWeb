<?php

require_once '../authorization.php';

$id = $_POST['IdProvince'];
$region_id = $_POST['IdRegion'];
$name = $_POST['ProvinceName'];
$token = $_SESSION['user_token'];


$id = intval($id);

$objeto = array(
    "IdProvince" => $id,    
    "IdRegion" => $region_id,
    "ProvinceName" => $name
  );

  function APIPUT(){
    $file = fopen( '../../bin/urls_api.config', "r");
    $url = array();
    
    while (!feof($file)) {
        $url[] = fgetcsv($file,null,';');
    }
    fclose($file);
    $APIProvinceObjUpdate = $url[28][1];
    $respuesta = $APIProvinceObjUpdate;
    return $respuesta;
  }
  $ruta = APIPUT();
  $curl = curl_init($ruta);
  
  $jsonDataEncoded = json_encode($objeto);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
  curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto));
  $result = curl_exec($curl);
header("Location: province.php");

?>