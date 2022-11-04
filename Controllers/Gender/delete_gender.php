<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_GET['IdGender'];

$id = intval($id);

$objeto = array(
  "IdGender" => $id
);

$ruta = APIGET("APIGenderObjDelete");
$curl = curl_init($ruta);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_URL,$ruta);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto)); 
$result = curl_exec($curl);
header("Location: gender.php");

?>