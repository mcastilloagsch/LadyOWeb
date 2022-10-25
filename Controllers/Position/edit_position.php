<?php
require_once '../authorization.php';

$id = $_POST['IdPosition'];
$name = $_POST['PositionName'];
$structure_type_id = $_POST['IdStructureType'];
$token = $_SESSION['user_token'];

$id = intval($id);

$objeto = array(
    "IdPosition" => $id,
    "PositionName" => $name,
    "IdStructureType" => $structure_type_id,
);

function APIPUT(){
  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();
  
  while (!feof($file)) {
      $url[] = fgetcsv($file,null,';');
  }
  fclose($file);
  $APIPositionObjUpdate = $url[23][1];
  $respuesta = $APIPositionObjUpdate;
  return $respuesta;
}
$ruta = APIPUT();
$curl = curl_init($ruta);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto));
$result = curl_exec($curl);
header("Location: position.php");


?>