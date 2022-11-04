<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['IdCountry'];
$name = $_POST['CountryName'];

$id = intval($id);

$objeto = array(
  "IdCountry" => $id,
  "CountryName" => $name
);

$API_URL=APIGET('APICountryObjUpdate');
$curl = curl_init($API_URL);

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($objeto)); 
$result = curl_exec($curl);
header("Location: country.php");


?>