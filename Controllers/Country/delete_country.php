<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

foreach($_POST as $key => $value){
  error_log("GOGO -$key-$value-     ");  
}

/*
$objeto = array(
  "IdCountry" => intval($_POST['IdCountry'])
);

$result = CURL_DELETE("APICountryObjDelete", $objeto, "Location: country.php");
*/
?>