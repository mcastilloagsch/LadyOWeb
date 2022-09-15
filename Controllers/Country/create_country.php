<?php
require_once '../authorization.php';

$name = $_POST['name'];
$nationality = $_POST['nationality'];
$iso = $_POST['iso'];
$token = $_SESSION['user_token'];


function APIPOST($token){

 $file = fopen( '../../bin/urls_api.config', "r");
 $url = array();

 while (!feof($file)) {
  $url[] = fgetcsv($file,null,';');
 }

 fclose($file);
 $APICountriesObjInsert = $url[11][1];
 $respuesta = $APICountriesObjInsert . $token;
 return $respuesta;
}

$ruta = APIPOST($token);
$curl = curl_init($ruta);

$objeto = array(
 "name" => $name,
 "nationality" => $nationality,
 "iso" => $iso,
);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: country.php");

?>