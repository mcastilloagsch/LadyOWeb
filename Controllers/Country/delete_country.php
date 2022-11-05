<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$id = $_POST['IdCountry'];
var_dump($_POST);

$id = intval($id);

$objeto = array(
  "IdCountry" => $id
);

$result = CURL_DELETE("APICountryObjDelete", $objeto, "Location: country.php");

?>