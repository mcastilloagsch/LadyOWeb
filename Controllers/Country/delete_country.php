<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdCountry" => intval($_GET["IdCountry"])
);

$result = CURL_DELETE("APICountryObjDelete", $objeto, "Location: country.php", "");

?>