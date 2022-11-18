<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = "IdSocioEconomic";
$titulo = "Editar Socio Económico";
$items = [
    [ "for" => "", "type" => "", "name" => "IdSocioEconomic", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "SocioEconomicName", "hidden" => 0]
];

$action = "edit_socioeconomic.php";
$method = "post";
$api_url = "APISocioeconomicGetObject";
$back = "socioeconomic.php";

controller_update_item_page($id_get, $titulo, $items, $action, $method, $api_url, $back);

?>