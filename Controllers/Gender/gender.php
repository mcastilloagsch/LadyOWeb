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
$id = "IdGender";

$objects = [ 
  [
    "label" => "ID Genero",
    "key" => $id,
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

$buttons = [
  ["id" => "edit-button","href" => "update_gender.php?$id=", "text" => "Editar", "active" => 1],
  ["id" => "delete-button","href" => "delete_gender.php?$id=", "text" => "Eliminar", "active" => 1]
];

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $buttons, $id);

?>