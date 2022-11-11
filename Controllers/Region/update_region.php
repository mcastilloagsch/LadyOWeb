<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Editar Region";
$items = [
    [ "for" => ""        , "type" => ""    , "name" => "IdRegion"  , "hidden" => 1],
    [ "for" => "Nombre"  , "type" => "text", "name" => "RegionName", "hidden" => 0],
    [ "for" => "OrderSec", "type" => "text", "name" => "OrderSec"  , "hidden" => 0]
];

$action = "edit_region.php";
$method = "post";
$back = "region.php";
$api_url = "APIRegionGetObject";
$id_get = "IdRegion";

controller_update_item_page($id_get, $titulo, $items, $action, $api_url, $method, $back);

?>