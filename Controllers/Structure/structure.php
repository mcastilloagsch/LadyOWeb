<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "structure.php";

$titulo = "Mantenedores de Estructuras";

$general_buttons = [
  ["href" => "new_structure.php", "text" => "Agregar"]
];

$label_items = [ "ID","Nombre","ID Tipo de estructura","ID Parent"];

$api_url = "APIStructuresGetlist";

$keys = [ "id","name","structure_type_id","parent_id"];

$item_buttons = [
    ["id" => "edit-button", "href" => "update_structure.php?id=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button", "href" => "delete_structure.php?id=", "text" => "Eliminar", "active" => 1]
];
$id_key = "id";

controller_page_html($caller, $titulo, $general_buttons, $label_items, $api_url, $keys, $item_buttons, $id_key);

?>