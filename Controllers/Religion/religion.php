<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "religion.php";

$titulo = "Mantenedores de Religiones";

$general_buttons = [
  ["href" => "new_religion.php", "text" => "Agregar"]
];

$api_url = "APIReligionGetlist";

$objects = [ 
  [
    "label" => "ID",
    "key" => "IdReligion",
    "hidden" => 1
  ],
  [
    "label" => "Nombre",
    "key" => "ReligionName",
    "hidden" => 0
  ],
  [
    "label" => "Confesión",
    "key" => "Confesion",
    "hidden" => 0
  ],
  [
    "label" => "Borrado",
    "key" => "IsDeleted",
    "hidden" => 1
  ]
];

$item_buttons = [
    ["id" => "edit-button","href" => "update_religion.php?IdReligion=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_religion.php?IdReligion=", "text" => "Eliminar", "active" => 1]
];

$id_key = "id";

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $item_buttons, $id_key);

?>