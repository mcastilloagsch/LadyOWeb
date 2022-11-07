<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = intval($_POST['IdCountry']);

error_log("GOGO -$id-");

$objeto = array(
  "IdCountry" => intval($_POST['IdCountry'])
);

$result = CURL_DELETE("APICountryObjDelete", $objeto, "Location: country.php");

?>