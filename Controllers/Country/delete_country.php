<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

head_html(0);
echo "<body>\n";
print_debug("_SESSION \n",1);
print_debug(var_dump($_SESSION),1);
print_debug("\n");
print_debug("_POST \n",1);
print_debug(var_dump($_POST),1);
print_debug("\n");
rint_debug("_GET \n",1);
#print_debug($_GET['IdCountry'],1);
#print_debug("\n");
echo "</body>\n";
/*
$objeto = array(
  "IdCountry" => intval($_POST['IdCountry'])
);

$result = CURL_DELETE("APICountryObjDelete", $objeto, "Location: country.php");
*/
?>