<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

/*
head_html(0);
echo "<body>\n";
print_debug("SESSION\n",1);
print_debug(var_dump($_SESSION),1);
print_debug("\n",1);
print_debug("POST\n",1);
print_debug(var_dump($_POST),1);
print_debug("\n",1);
print_debug("GET\n",1);
print_debug($_GET['IdCountry'],1);
print_debug("\n",1);
echo "</body>\n";
*/

$id = strval($_GET['IdCountry']);
$objeto = array(
  "IdCountry" => "$id"
);

$result = CURL_DELETE("APICountryObjDelete", $objeto, "Location: country.php");

?>