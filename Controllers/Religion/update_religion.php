<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdReligion";
$titulo = "Editar Religion";
$items = [
    [ "for" => "", "type" => "", "name" => "IdReligion", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "ReligionName", "hidden" => 0],
    [ "for" => "Confesion", "type" => "number", "name" => "Confesion", "hidden" => 0]
];

$action = "edit_religion.php";
$method = "post";
$back = "religion.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>