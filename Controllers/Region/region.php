<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "region.php";

$titulo = "Mantenedores de Regiones";

$general_buttons = [
  ["href" => "new_region.php", "text" => "Agregar"]
];

$label_items = [ "ID","Nombre"];

$api_url = "APIRegionGetlist";

$keys = [ "IdRegion","RegionName"];

$item_buttons = [
    ["id" => "edit-button","href" => "update_region.php?IdRegion=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_region.php?IdRegion=", "text" => "Eliminar", "active" => 1]
];
$id_key = "IdRegion";

controller_page_html($caller, $titulo, $general_buttons, $label_items, $api_url, $keys, $item_buttons, $id_key);

?>
