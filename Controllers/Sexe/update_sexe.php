<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdSex";
$titulo = "Editar Sexo";
$items = [
    [ "for" => "", "type" => "", "name" => "IdSex", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "SexName", "hidden" => 0]
];

$action = "edit_religion.php";
$method = "post";
$back = "sexe.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>