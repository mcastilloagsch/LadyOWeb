<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "structure_type.php";

$titulo = "Mantenedores de Tipos de Estructuras";

$general_buttons = [
  ["href" => "new_structure_type.php", "text" => "Agregar"]
];

$label_items = [ "ID","Nombre","Prioridad"];

$api_url = "APIStructureTypeGetlist";

$keys = [ "id","name","priority"];

$item_buttons = [
    ["id" => "edit-button","href" => "update_structure_type.php?id=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_structure_type.php?id=", "text" => "Eliminar", "active" => 1]
];
$id_key = "id";

controller_page_html($caller, $titulo, $general_buttons, $label_items, $api_url, $keys, $item_buttons, $id_key);

?>