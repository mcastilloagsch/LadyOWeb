<?php
require_once '../authorization.php';

$name = $_POST['CountryName'];
$token = $_SESSION['user_token'];


function APIPOST(){

 $file = fopen( '../../bin/urls_api.config', "r");
 $url = array();

 while (!feof($file)) {
  $url[] = fgetcsv($file,null,';');
 }

 fclose($file);
 $APICountryObjInsert = $url[12][1];
 $respuesta = $APICountryObjInsert;
 return $respuesta;
}

$ruta = APIPOST();
$curl = curl_init($ruta);

$objeto = array(
 "CountryName" => $name
);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: country.php");

?>