<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "religion.php";

$titulo = "Mantenedores de Religiones";

$general_buttons = [
  ["href" => "new_religion.php", "text" => "Agregar"]
];

$label_items = [ "ID","Nombre","Confesión"];

$api_url = "APIReligionGetlist";

$keys = [ "id","name","confesion"];

$item_buttons = [
    ["id" => "edit-button","href" => "update_religion.php?id=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_religion.php?id=", "text" => "Eliminar", "active" => 1]
];
$id_key = "id";

controller_page_html($caller, $titulo, $general_buttons, $label_items, $api_url, $keys, $item_buttons, $id_key);

?>