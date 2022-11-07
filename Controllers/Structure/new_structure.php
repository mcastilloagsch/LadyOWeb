<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar Estructura";
$items = [
    [ "for" => "Nombre", "type" => "text", "name" => "name"],
    [ "for" => "Tipo de estructura", "type" => "number", "name" => "structure_type_id"],
    [ "for" => "ID Parent", "type" => "number", "name" => "parent_id"]
];
$action = "create_structure.php";
$method = "post";
$back = "structure.php";

controller_new_item_page($titulo, $items, $action, $method, $back);

?>