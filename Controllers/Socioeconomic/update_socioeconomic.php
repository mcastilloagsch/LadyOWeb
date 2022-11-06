<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "id";
$titulo = "Editar Socio Económico";
$items = [
    [ "for" => "", "type" => "", "name" => "id", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "name", "hidden" => 0],
    [ "for" => "Valores", "type" => "text", "name" => "values", "hidden" => 0]
];

$action = "edit_religion.php";
$method = "post";
$back = "edit_socioeconomic.php";

#$ruta = APIGET("APISocioeconomicsGetObject")."/{token}/".$var);
controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>