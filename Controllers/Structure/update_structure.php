<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdStructure";
$titulo = "Editar Tipo Estructura";
$items = [
    
    [ "for" => "", "type" => "", "name" => "IdStructure", "hidden" => 1],
    [ "for" => "IdStructureParent", "type" => "number", "name" => "IdStructureParent", "hidden" => 0],
    [ "for" => "IdCommune", "type" => "number", "name" => "IdCommune", "hidden" => 0],    
    [ "for" => "IdStructureType", "type" => "number", "name" => "IdStructureType", "hidden" => 0],
    [ "for" => "IdSocioEconomic", "type" => "number", "name" => "IdSocioEconomic", "hidden" => 0],
    [ "for" => "Nombre", "type" => "text", "name" => "StructureName", "hidden" => 0],
    [ "for" => "IdBranch", "type" => "number", "name" => "IdBranch", "hidden" => 0],
    [ "for" => "SponsorName", "type" => "text", "name" => "SponsorName","hidden" => 0],
    [ "for" => "SponsorAddress", "type" => "text", "name" => "SponsorAddress","hidden" => 0],
    [ "for" => "SponsorDni", "type" => "text", "name" => "SponsorDni","hidden" => 0],
    [ "for" => "SponsorEmail", "type" => "email", "name" => "SponsorEmail","hidden" => 0],
    [ "for" => "SponsorPhone", "type" => "number", "name" => "SponsorPhone","hidden" => 0],
];

$action = "edit_structure.php";
$method = "post";
$back = "structure.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>