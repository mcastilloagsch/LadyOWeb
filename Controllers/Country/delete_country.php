<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_GET['IdCountry'];

$id = intval($id);

$objeto = array(
  "IdCountry" => $id
);

$API_URL=APIGET('APICountryObjDelete');
$curl = curl_init($API_URL);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_URL,$config_api);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto)); 
$result = curl_exec($curl);
header("Location: country.php");

?>