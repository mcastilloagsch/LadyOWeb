<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar Posición";
$items = [
    [ "for" => "Nombre", "type" => "text", "name" => "PositionName"],
    [ "for" => "Tipo de estructura", "type" => "number", "name" => "IdStructureType"]
];
$action = "create_position.php";
$method = "post";
$back = "position.php";

controller_new_item_page($caller, $titulo, $items, $action, $method, $back);

?>