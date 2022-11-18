<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdPositionType";
$titulo = "Editar posiciones";
$items = [
    [ "for" => "", "type" => "", "name" => "IdPositionType", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "PositionTypeName", "hidden" => 0],
    [ "for" => "Tipo de estructura", "type" => "number", "name" => "IdStructureType", "hidden" => 0]
];

$action = "edit_position.php";
$method = "post";
$api_url = "APIPositionTypeGetObject";
$back = "position.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $api_url, $back);

?>