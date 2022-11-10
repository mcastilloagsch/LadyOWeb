<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$objeto = array(
 "CountryName" => $_POST['CountryName']
);

$result = CURL_POST("APICountryObjInsert", $objeto, "Location: country.php","");

?>