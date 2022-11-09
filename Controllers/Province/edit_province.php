<?php

require_once '../authorization.php';
include_once '../../Common/functions.php';


$objeto = array(
   
    "IdRegion" => $region_id,
    "ProvinceName" => $name
  );

$result = CURL_PUT("APIProvinceObjUpdate", $objeto, "Location: province.php", "");

?>