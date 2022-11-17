<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdBranch" => intval($_GET["IdBranch"])
);

$result = CURL_DELETE("APIBranchObjDelete", $objeto, "Location: branche.php", "");

?>