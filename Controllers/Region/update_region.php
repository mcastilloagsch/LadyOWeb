<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdRegion";
$titulo = "Editar Región";
$items = [
    [ "for" => "", "type" => "" , "name" => "IdRegion", "hidden" => 1],
    [ "for" => "Nombre"  , "type" => "text", "name" => "RegionName", "hidden" => 0],
    [ "for" => "OrderSec", "type" => "number", "name" => "OrderSec"  , "hidden" => 0],
    [ "for" => "RegCod", "type" => "text", "name" => "RegCod", "hidden" => 0]
];

$action = "edit_region.php";
$method = "post";
$api_url = "APIRegionGetObject";
$back = "region.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $api_url, $back);

?>