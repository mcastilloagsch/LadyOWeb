<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdCommune";
$titulo = "Editar Comuna";
$items = [
    [ "for" => "", "type" => "", "name" => "IdCommune", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "CommuneName", "hidden" => 0],
    [ "for" => "Id Provincia", "type" => "text", "name" => "IdProvince", "hidden" => 0]
];

$action = "edit_commune.php";
$method = "post";
$back = "commune.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>