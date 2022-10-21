<?php
require_once '../authorization.php';

$id = $_GET['IdCommune'];

$id = intval($id);

$objeto = array(
  "IdCommune" => $id
);

function APIDELETE(){
 
  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();
    
  while (!feof($file)) {
    $url[] = fgetcsv($file,null,';');
  }

  fclose($file);
  $APICommuneObjDelete = $url[9][1];
  $respuesta = $APICommuneObjDelete;  
  return $respuesta;

}

$ruta = APIDELETE();
$curl = curl_init($ruta);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_URL,$ruta);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto)); 
$result = curl_exec($curl);
header("Location: commune.php");

?>