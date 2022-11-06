<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar Género";
$items = [
    [ "for" => "Nombre", "type" => "text", "name" => "GenderName"]
];
$action = "create_gender.php";
$method = "post";
$back = "gender.php";

controller_new_item_page($caller, $titulo, $items, $action, $method, $back);

?>