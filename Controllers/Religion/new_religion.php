<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar Religión";
$items = [
    [ "for" => "Nombre", "type" => "text", "name" => "ReligionName"],
    [ "for" => "Confesión", "type" => "text", "name" => "Confesion"],
];
$action = "create_religion.php";
$method = "post";
$back = "religion.php";

controller_new_item_page($titulo, $items, $action, $method, $back);

?>