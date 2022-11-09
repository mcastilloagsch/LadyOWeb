<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdGender";
$titulo = "Editar Genero";
$items = [
    [ "for" => "", "type" => "", "name" => "IdGender", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "GenderName", "hidden" => 0]
];

$action = "edit_gender.php";
$method = "post";
$back = "gender.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>