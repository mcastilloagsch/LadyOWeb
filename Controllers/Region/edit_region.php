<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['id'];
$name = $_POST['name'];
$geom = $_POST['geom'];
$token = $_SESSION['user_token'];


$id = intval($id);

$objeto = array(
    "id" => $id,
    "name" => $name,
    "geom" => $geom,
  );

$ruta = APIGET("APIRegionsObjUpdate")."/".$token;
$curl = curl_init($ruta);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto));
$result = curl_exec($curl);
header("Location: region.php");


?>