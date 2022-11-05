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

$result = CURL_PUT("APICountryObjUpdate", $objeto, "Location: country.php", "");

?>