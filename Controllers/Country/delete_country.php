<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

id = $_POST['IdCountry'];
$name = $_POST['CountryName'];

$id = intval($id);

$objeto = array(
  "IdCountry" => $id,
  "CountryName" => $name
);

$result = CURL_DELETE("APICountryObjDelete", $objeto, "Location: country.php");

?>