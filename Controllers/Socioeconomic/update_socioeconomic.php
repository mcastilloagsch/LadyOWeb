<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdSocioEconomic";
$titulo = "Editar Socio Económico";
$items = [
    [ "for" => "", "type" => "", "name" => "IdSocioEconomic", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "SocioEconomicName", "hidden" => 0],
    [ "for" => "", "type" => "", "name" => "IsDeleted", "hidden" => 1]    
];

$action = "edit_religion.php";
$method = "post";
$back = "edit_socioeconomic.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $back);

?>