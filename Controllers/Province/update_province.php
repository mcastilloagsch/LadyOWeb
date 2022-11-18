<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdProvince";
$titulo = "Editar Provincia";
$items = [
    [ "for" => "", "type" => "", "name" => "IdProvince", "hidden" => 1],
    [ "for" => "Id Region", "type" => "number", "name" => "IdRegion", "hidden" => 0],    
    [ "for" => "Nombre", "type" => "text", "name" => "ProvinceName", "hidden" => 0],
    [ "for" => "ProvCod", "type" => "text", "name" => "ProvCod", "hidden" => 0]
];

$action = "edit_province.php";
$method = "post";
$api_url = "APIProvinceGetObject";
$back = "province.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $api_url,$back);

?>