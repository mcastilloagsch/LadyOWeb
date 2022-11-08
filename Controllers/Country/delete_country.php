<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = $_GET["IdCountry"];
$objeto = array(
  "IdCountry" => $id_get
);

$seconds = 5;

head_html(0);
echo "<body>\n";
echo "<h2>Gogo $id_get </h2>\n";
echo "</body>\n";
sleep($seconds);

$result = CURL_PUT("APICountryObjDelete", $objeto, "Location: country.php", "");

?>