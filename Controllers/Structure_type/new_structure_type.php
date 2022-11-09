<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar Tipo de Estructura";
$items = [
    [ "for" => "Nombre", "type" => "text", "name" => "StructureTypeName"]
];
$action = "create_structure_type.php";
$method = "post";
$back = "structure_type.php";

controller_new_item_page($titulo, $items, $action, $method, $back);

?>


