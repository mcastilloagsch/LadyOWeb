<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "gender.php";

$titulo = "Mantenedores de Géneros";

$general_buttons = [
  ["href" => "new_gender.php", "text" => "Agregar"]
];

$label_items = [ "ID Genero","Nombre","Borrado"];

$api_url = "APIGenderGetlist";

$keys = [ "IdGender","GenderName","IsDeleted"];

$item_buttons = [
    ["id" => "edit-button","href" => "update_gender.php?IdGender=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_gender.php?IdGender", "text" => "Eliminar", "active" => 1]
];
$id_key = "IdGender";

controller_page_html($caller, $titulo, $general_buttons, $label_items, $api_url, $keys, $item_buttons, $id_key);

?>