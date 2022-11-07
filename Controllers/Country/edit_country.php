<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdCountry" => intva($_POST['IdCountry']),
  "CountryName" => $_POST['CountryName']
);

$result = CURL_PUT("APICountryObjUpdate", $objeto, "Location: country.php", "");

?>