<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdPosition";
$titulo = "Editar posiciones";
$items = [
    [ "for" => "", "type" => "", "name" => "IdPosition", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "PositionName", "hidden" => 0],
    [ "for" => "Tipo de estructura", "type" => "number", "name" => "IdStructureType", "hidden" => 0]
];

$action = "edit_country.php";
$method = "post";
$back = "edit_position.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>