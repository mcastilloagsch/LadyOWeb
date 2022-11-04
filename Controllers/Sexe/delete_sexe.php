<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_GET['IdSex'];

$id = intval($id);

$objeto = array(
  "IdSex" => $id
);

$ruta = APIGET("APISexObjDelete");
$curl = curl_init($ruta);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_URL,$ruta);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto)); 
$result = curl_exec($curl);
header("Location: sexe.php");

?>