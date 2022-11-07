<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';



$objeto = array(
  "IdCountry" => intval($_POST['IdCountry'])
);

$result = CURL_DELETE("APICountryObjDelete", $objeto, "Location: country.php");

?>