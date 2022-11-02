<?php
require_once '../authorization.php';

$id = $_POST['IdCountry'];
$name = $_POST['CountryName'];
$token = $_SESSION['user_token'];


$id = intval($id);

$objeto = array(
  "IdCountry" => $id,
  "CountryName" => $name
);


function APIPUT(){
 
  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();
    
  while (!feof($file)) {
    $url[] = fgetcsv($file,null,';');
  }

  fclose($file);
  $APICountryObjUpdate = $url[13][1];
  $respuesta = $APICountryObjUpdate;  
  return $respuesta;

}

$ruta = APIPUT();
$curl = curl_init($ruta);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto)); 
$result = curl_exec($curl);
header("Location: country.php");


?>