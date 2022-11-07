<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "position.php";

$titulo = "Mantenedores de Posiciones";

$general_buttons = [
  ["href" => "new_position.php", "text" => "Agregar"]
];

$label_items = [ "ID","Nombre","Tipo de estructura","Borrado"];

$api_url = "APIPositionGetlist";

$keys = [ "IdPosition","PositionName","IdStructureType","IsDeleted"];

$item_buttons = [
    ["id" => "edit-button","href" => "update_position.php?IdPosition=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_position.php?IdPosition=", "text" => "Eliminar", "active" => 1]
];
$id_key = "IdPosition";

controller_page_html($caller, $titulo, $general_buttons, $label_items, $api_url, $keys, $item_buttons, $id_key);

?>