<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdReligion" => intval($_GET["IdReligion"])
);

$result = CURL_DELETE("APIReligionObjDelete", $objeto, "Location: religion.php", "");

?>