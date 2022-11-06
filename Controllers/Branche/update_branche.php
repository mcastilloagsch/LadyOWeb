<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Editar Rama";
$items = [
    [ "for" => "", "type" => "", "name" => "id", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "name", "hidden" => 0],
    [ "for" => "Nombre unidad", "type" => "text", "name" => "unit_name", "hidden" => 0],
    [ "for" => "Pequeño equipo", "type" => "text", "name" => "small_team", "hidden" => 0]
];

$action = "edit_branche.php";
$method = "post";
$back = "branche.php";

controller_update_item_page($titulo, $items, $action, $method, $back);
?>