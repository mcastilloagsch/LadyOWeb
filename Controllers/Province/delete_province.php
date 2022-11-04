<?php
require_once '../authorization.php';

$id = $_GET['IdProvince'];

$id = intval($id);

$objeto = array(
  "IdProvince" => $id
);

function PARAMGET($api_abs_path){

  $config = file('../../bin/param.config');

  foreach($config as $linea){
    $valores=explode(';',$linea);
    $url[$valores[0]] = $valores[1];    
  }
  
  if ( $url[$api_abs_path] ) return $url[$api_abs_path];
  else return "";
}

function APIDELETE($api_url){  
 
  $archivo = file('../../bin/urls_api.config');
 
  foreach($archivo as $linea){
    $valores=explode(';',$linea);
    $url[$valores[0]] = $valores[1];    
  }
 
  if ( $url[$api_url] ) return $url[$api_url];
  else return ""; 
}

$API_URL=APIDELETE('APIProvinceObjDelete');
$API_ABS_PATH=PARAMGET('API_ABS_PATH');

$config_api = trim($API_ABS_PATH.$API_URL);
$curl = curl_init($config_api);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_URL,$config_api);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto)); 
$result = curl_exec($curl);
header("Location: province.php");

?>