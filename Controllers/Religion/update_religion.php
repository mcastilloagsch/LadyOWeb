<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdReligion";
$titulo = "Editar Religion";
$items = [
    [ "for" => "", "type" => "", "name" => "IdReligion", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "ReligionName", "hidden" => 0],
    [ "for" => "Confesión", "type" => "text", "name" => "Confesion", "hidden" => 0],
    [ "for" => "", "type" => "", "name" => "IsDeleted", "hidden" => 1]
];

$action = "edit_religion.php";
$method = "post";
$api_url = "APIReligionGetObject";
$back = "religion.php";


controller_update_item_page($id_get, $titulo, $items, $action, $method, $api_url, $back);

?>