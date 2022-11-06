<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "commune.php";

$titulo = "Mantenedores de Comunas";

$general_buttons = [
  ["href" => "new_commune.php", "text" => "Agregar"]
];

$label_items = [ "ID","ID Provincia","Nombre Comuna","Borrada"];

$api_url = "APICommuneGetlist";

$keys = [ "IdCommune","IdProvince","CommuneName","IsDeleted"];

$item_buttons = [
    ["id" => "edit-button","href" => "update_commune.php?IdCommune=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_commune.php?IdCommune=", "text" => "Eliminar", "active" => 1]
];
$id_key = "IdCommune";

controller_page_html($caller, $titulo, $general_buttons, $label_items, $api_url, $keys, $item_buttons, $id_key);

?>