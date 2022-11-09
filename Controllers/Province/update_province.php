<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdProvince";
$titulo = "Editar Provincia";
$items = [
    [ "for" => "", "type" => "", "name" => "IdProvince", "hidden" => 1],
    [ "for" => "Id Region", "type" => "text", "name" => "IdRegion", "hidden" => 0],
    [ "for" => "Nombre", "type" => "text", "name" => "ProvinceName", "hidden" => 0]
];

$action = "edit_country.php";
$method = "post";
$back = "edit_province.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>