<?php
require_once '../authorization.php';


$region_id = $_POST['IdRegion'];
$name = $_POST['ProvinceName'];

function PARAMGET($api_abs_path){

  $config = file('../../bin/param.config');

  foreach($config as $linea){
    $valores=explode(';',$linea);
    $url[$valores[0]] = $valores[1];    
  }
  
  if ( $url[$api_abs_path] ) return $url[$api_abs_path];
  else return "";  
}

function APIPOST($api_url){  
   
  $archivo = file('../../bin/urls_api.config');
 
  foreach($archivo as $linea){
    $valores=explode(';',$linea);
    $url[$valores[0]] = $valores[1];    
  }
 
  if ( $url[$api_url] ) return $url[$api_url];
  else return ""; 
}

$API_URL=APIPOST('APIProvinceObjInsert');
$API_ABS_PATH=PARAMGET('API_ABS_PATH');

$config_api = trim($API_ABS_PATH.$API_URL);

$curl = curl_init($config_api);

$objeto = array(  
  "IdRegion" => $region_id,
  "ProvinceName" => $name
);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: province.php");

?>