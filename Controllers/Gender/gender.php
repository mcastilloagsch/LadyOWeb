<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "gender.php";

$titulo = "Mantenedores de Géneros";

$general_buttons = [
  ["href" => "new_gender.php", "text" => "Agregar"]
];

$api_url = "APIGenderGetlist";

$objects = [ 
  [
    "label" => "ID Genero",
    "key" => "IdGender",
    "hidden" => 1
  ],
  [
    "label" => "Nombre",
    "key" => "GenderName",
    "hidden" => 0
  ],
  [
    "label" => "Borrado",
    "key" => "IsDeleted",
    "hidden" => 1
  ]
];

$item_buttons = [
    ["id" => "edit-button","href" => "update_gender.php?IdGender=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_gender.php?IdGender", "text" => "Eliminar", "active" => 1]
];

$id_key = "IdGender";

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $item_buttons, $id_key);

?>