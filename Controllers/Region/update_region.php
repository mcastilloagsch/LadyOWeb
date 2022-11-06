<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "id";
$titulo = "Editar Region";
$items = [
    [ "for" => "", "type" => "", "name" => "id", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "name", "hidden" => 0]
];

$action = "edit_region.php";
$method = "post";
$back = "region.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>