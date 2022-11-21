<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar Comuna";
$items = [
    [ "for" => "Id Provincia", "type" => "number", "name" => "IdProvince"],
    [ "for" => "Nombre", "type" => "text", "name" => "CommuneName"],
    [ "for" => "ComCod", "type" => "text", "name" => "ComCod"]
];
$action = "create_commune.php";
$method = "post";
$back = "commune.php";

controller_new_item_page($titulo, $items, $action, $method, $back);

?>