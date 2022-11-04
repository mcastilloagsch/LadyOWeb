<?php
require_once '../authorization.php';

$name = $_POST['GenderName'];

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

$API_URL=APIPOST('APIGenderObjInsert');
$API_ABS_PATH=PARAMGET('API_ABS_PATH');

$config_api = trim($API_ABS_PATH.$API_URL);

$curl = curl_init($config_api);

$objeto = array(
    "GenderName" => $name,
  );

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: gender.php");

?>