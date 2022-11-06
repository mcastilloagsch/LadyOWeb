<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar Sexo";
$items = [
    [ "for" => "Nombre", "type" => "text", "name" => "SexName"]
];
$action = "create_sexe.php";
$method = "post";
$back = "sexe.php";

controller_new_item_page($titulo, $items, $action, $method, $back);

?>