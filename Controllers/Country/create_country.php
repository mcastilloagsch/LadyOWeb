<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['CountryName'];

$objeto = array(
 "CountryName" => $name
);

$result = CURL_POST("APICountryObjInsert", $objeto,"Location: country.php");

?>