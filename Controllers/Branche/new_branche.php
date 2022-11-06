<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar Rama";
$items = [
    [ "for" => "Nombre", "type" => "text", "name" => "name"],
    [ "for" => "Nombre Unidad", "type" => "text", "name" => "unit_name"],
    [ "for" => "Pequeño equipo", "type" => "text", "name" => "small_team"]
];
$action = "create_branche.php";
$method = "post";
$back = "country.php";

controller_new_item_page($caller, $titulo, $items, $action, $method, $back);

?>