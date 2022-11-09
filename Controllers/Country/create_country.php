<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$objeto = array(
 "CountryName" => $_POST['CountryName']
);

#print_debug($_POST['CountryName'],1);
#print_debug("gogo ",1);

$result = CURL_POST("APICountryObjInsert", $objeto,"Location: country.php",0);

?>