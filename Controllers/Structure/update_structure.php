<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "id";
$titulo = "Editar Tipo Estructura";
$items = [
    [ "for" => "", "type" => "", "name" => "id", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "name", "hidden" => 0],
    [ "for" => "Tipo de estructura id", "type" => "number", "name" => "structure_type_id", "hidden" => 0],
    [ "for" => "Parent id", "type" => "number", "name" => "parent_id", "hidden" => 0]
];

$action = "edit_structure.php";
$method = "post";
$back = "structure.php";

#  $ruta = APIGET("APIStructuresGetObject")."/{token}/".$var;
controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>