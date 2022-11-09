<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Agregar país";
$items = [[ "for" => "Nombre", "type" => "text", "name" => "CountryName"]];
$action = "create_country.php";
$method = "post";
$back = "country.php";

controller_new_item_page($titulo, $items, $action, $method, $back);
?>