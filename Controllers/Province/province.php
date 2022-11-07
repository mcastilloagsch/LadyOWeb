<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "province.php";

$titulo = "Mantenedores de Provincias";

$general_buttons = [
  ["href" => "new_province.php", "text" => "Agregar"]
];

$label_items = [ "ID","ID Region","Nombre","Borrado"];

$api_url = "APIProvinceGetlist";

$keys = [ "IdProvince","IdRegion","ProvinceName","IsDeleted"];

$item_buttons = [
    ["id" => "edit-button","href" => "update_province.php?IdProvince=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_province.php?IdProvince=", "text" => "Eliminar", "active" => 1]
];
$id_key = "IdProvince";

controller_page_html($caller, $titulo, $general_buttons, $label_items, $api_url, $keys, $item_buttons, $id_key);

?>