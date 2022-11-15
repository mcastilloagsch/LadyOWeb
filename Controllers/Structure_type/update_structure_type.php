<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "id";
$titulo = "Editar Tipo de Estructura";
$items = [
    [ "for" => "", "type" => "", "name" => "id", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "name", "hidden" => 0],
    [ "for" => "Prioridad", "type" => "number", "name" => "priority", "hidden" => 0]
];

$action = "edit_structure_type.php";
$method = "post";
$back = "structure_type.php";

#  $ruta = APIGET("APIStructureTypeGetObject")."/{token}/".$var;
controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>
