<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar Religión";
$items = [
    [ "for" => "Nombre", "type" => "text", "name" => "name"],
    [ "for" => "Confesion", "type" => "number", "name" => "confesion"]
];
$action = "create_religion.php";
$method = "post";
$back = "religion.php";

controller_new_item_page($caller, $titulo, $items, $action, $method, $back);

?>