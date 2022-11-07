<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "socioeconomic.php";

$titulo = "Mantenedores de Socio Economico";

$general_buttons = [
  ["href" => "new_socioeconomic.php", "text" => "Agregar"]
];

$label_items = [ "ID","Nombre","Values"];

$api_url = "APISocioeconomicsGetlist";

$keys = [ "id","name","values"];

$item_buttons = [
    ["id" => "edit-button","href" => "update_socioeconomic.php?id=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_socioeconomic.php?id=", "text" => "Eliminar", "active" => 1]
];
$id_key = "id";

controller_page_html($caller, $titulo, $general_buttons, $label_items, $api_url, $keys, $item_buttons, $id_key);

?>
