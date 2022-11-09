<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar Provincia";
$items = [
    [ "for" => "Id Region", "type" => "text", "name" => "IdRegion"],
    [ "for" => "Nombre", "type" => "text", "name" => "ProvinceName"]
];
$action = "create_province.php";
$method = "post";
$back = "province.php";

controller_new_item_page($titulo, $items, $action, $method, $back);

?>