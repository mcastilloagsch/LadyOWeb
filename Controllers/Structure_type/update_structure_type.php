<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdStructureType";
$titulo = "Editar Tipo de Estructura";
$items = [
    [ "for" => "", "type" => "", "name" => "IdStructureType", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "StructureTypeName", "hidden" => 0],
    [ "for" => "", "type" => "", "name" => "IsDeleted", "hidden" => 1]
];

$action = "edit_structure_type.php";
$method = "post";
$back = "structure_type.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>
