<?php
require_once '../authorization.php';

$id = $_POST['id'];
$name = $_POST['name'];
$token = $_SESSION['user_token'];

$id = intval($id);

$objeto = array(
    "id" => $id,
    "name" => $name,
  );

function APIPUT($token){
 $file = fopen( '../../bin/urls_api.config', "r");
 $url = array();
    
 while (!feof($file)) {
   $url[] = fgetcsv($file,null,';');
 }
 fclose($file);
  $APIGendersObjUpdate = $url[16][1];
  $respuesta = $APIGendersObjUpdate . $token;
  return $respuesta;
}
$ruta = APIPUT($token);
$curl = curl_init($ruta);


$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto));
$result = curl_exec($curl);
header("Location: gender.php");


?>