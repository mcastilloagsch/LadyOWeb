<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar Estructura";
$items = [
    [ "for" => "IdStructureParent", "type" => "number", "name" => "IdStructureParent"],
    [ "for" => "Dirección", "type" => "text", "name" => "Address"],
    [ "for" => "IdCommune", "type" => "number", "name" => "IdCommune"],
    [ "for" => "IdStructureType", "type" => "number", "name" => "IdStructureType"],
    [ "for" => "IdSocioEconomic", "type" => "number", "name" => "IdSocioEconomic"],
    [ "for" => "Nombre", "type" => "text", "name" => "StructureName"],
    [ "for" => "IdBranch", "type" => "number", "name" => "IdBranch"],
    [ "for" => "SponsorName", "type" => "text", "name" => "SponsorName"],
    [ "for" => "SponsorAddress", "type" => "text", "name" => "SponsorAddress"],
    [ "for" => "SponsorDni", "type" => "text", "name" => "SponsorDni"],
    [ "for" => "SponsorEmail", "type" => "email", "name" => "SponsorEmail"],
    [ "for" => "SponsorPhone", "type" => "number", "name" => "SponsorPhone"],
];
$action = "create_structure.php";
$method = "post";
$back = "structure.php";

controller_new_item_page($titulo, $items, $action, $method, $back);

?>