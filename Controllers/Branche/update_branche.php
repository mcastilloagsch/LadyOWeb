<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "id";
$titulo = "Editar Rama";
$items = [
    [ "for" => "", "type" => "", "name" => "IdBranch", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "BranchName", "hidden" => 0],
    [ "for" => "Nombre unidad", "type" => "text", "name" => "UnitName", "hidden" => 0],
    [ "for" => "Pequeño equipo", "type" => "text", "name" => "TeamName", "hidden" => 0]
];

$action = "edit_branche.php";
$method = "post";
$back = "branche.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);
?>