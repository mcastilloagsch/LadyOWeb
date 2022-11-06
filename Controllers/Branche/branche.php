<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "branche.php";

$titulo = "Mantenedores de Ramas";

$general_buttons = [
  ["href" => "new_branche.php", "text" => "Agregar"]
];

$label_items = [ "ID","Nombre","Nombre Unidad","Pequeño Equipo"];

$api_url = "APIBranchGetlist";

$keys = [ "id","name","unit_name","small_team"];

$item_buttons = [
    ["id" => "edit-button","href" => "update_branche.php?id=", "text" => "Editar"],
    ["id" => "delete-button","href" => "delete_branche.php?id=", "text" => "Eliminar"]
];
$id_key = "IdCountry";

controller_page_html($caller, $titulo, $general_buttons, $label_items, $api_url, $keys, $item_buttons, $id_key);

?>