<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar Socio Económico";
$items = [
    [ "for" => "Nombre", "type" => "text", "name" => "SocioEconomicName"]
];
$action = "create_socioeconomic.php";
$method = "post";
$back = "socioeconomic.php";

controller_new_item_page($titulo, $items, $action, $method, $back);

?>