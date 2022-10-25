<?php
require_once '../authorization.php';


$id = $_POST['IdCommune'];
$province_id = $_POST['IdProvince'];
$name = $_POST['CommuneName'];
$token = $_SESSION['user_token'];

$id = intval($id);

$objeto = array(
  "IdCommune" => $id,
  "IdProvince" => $province_id,
  "CommuneName" => $name
);

function APIPUT(){
 
  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();
    
  while (!feof($file)) {
    $url[] = fgetcsv($file,null,';');
  }

  fclose($file);
  $APICommuneObjUpdate = $url[8][1];
  $respuesta = $APICommuneObjUpdate;  
  return $respuesta;

}

$ruta = APIPUT();
$curl = curl_init($ruta);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto));
$result = curl_exec($curl);
header("Location: commune.php");

?>