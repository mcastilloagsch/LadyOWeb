<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar Región";
$items = [
    [ "for" => "Nombre", "type" => "text", "name" => "RegionName"],
    [ "for" => "OrderSec", "type" => "number", "name" => "OrderSec"],
    [ "for" => "RegCod", "type" => "text", "name" => "RegCod"]
];
$action = "create_region.php";
$method = "post";
$back = "region.php";

controller_new_item_page( $titulo, $items, $action, $method, $back);

?>