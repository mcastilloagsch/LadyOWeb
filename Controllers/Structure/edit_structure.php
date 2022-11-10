<?php

require_once '../authorization.php';
include_once '../../Common/functions.php';

$objeto = array(
  "IdStructure" => intval($_POST['IdStructure']),
  "IdStructureParent" => intval($_POST['IdStructureParent']),
  "Address" => $_POST['Address'],
  "IdCommune" => intval($_POST['IdCommune']),
  "IdStructureType" => intval($_POST['IdStructureType']),
  "IdSocioEconomic" => intval($_POST['IdSocioEconomic']),
  "StructureName" => $_POST['StructureName'],
  "IdBranch" => intval($_POST['IdBranch']),
  "SponsorName" => $_POST['SponsorName'],
  "SponsorAddress" => $_POST['SponsorAddress'],
  "SponsorDni" => $_POST['SponsorDni'],
  "SponsorEmail" => $_POST['SponsorEmail'],
  "SponsorPhone" => intval($_POST['SponsorPhone'])
);

$result = CURL_PUT("APIStructureObjUpdate", $objeto, "Location: structure.php","");

?>