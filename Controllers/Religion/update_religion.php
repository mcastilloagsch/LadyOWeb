<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "id";
$titulo = "Editar Religion";
$items = [
    [ "for" => "", "type" => "", "name" => "id", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "name", "hidden" => 0],
    [ "for" => "Confesion", "type" => "number", "name" => "confesion", "hidden" => 0]
];

$action = "edit_religion.php";
$method = "post";
$back = "religion.php";

#  $ruta = APIGET("APIReligionGetObject")."/{token}/".$var;
controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>