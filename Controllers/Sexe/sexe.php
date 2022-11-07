<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "sexe.php";

$titulo = "Mantenedores de Sexos";

$general_buttons = [
  ["href" => "new_sexe.php", "text" => "Agregar"]
];

$label_items = [ "ID","Nombre"];

$api_url = "APISexGetlist";

$keys = [ "IdSex","SexName"];

$item_buttons = [
    ["id" => "edit-button","href" => "update_sexe.php?IdSex=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_sexe.php?IdSex=", "text" => "Eliminar", "active" => 1]
];
$id_key = "IdSex";

controller_page_html($caller, $titulo, $general_buttons, $label_items, $api_url, $keys, $item_buttons, $id_key);

?>