<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$id_get = strval($_GET['IdCountry']);
$titulo = "Editar País";
$items = [
    [ "for" => "", "type" => "", "name" => "IdCountry", "hidden" => 1],
    [ "for" => "Nombre", "type" => "text", "name" => "CountryName", "hidden" => 0],
    [ "for" => "", "type" => "", "name" => "IsDeleted", "hidden" => 1]
];

$action = "edit_country.php";
$method = "post";
$back = "country.php";

controller_update_item_page("$id_get", $titulo, $items, $action, $method, $back);

?>