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
$id = "IdReligion";

$objects = [ 
  [
    "label" => "ID",
    "key" => $id,
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

$buttons = [
    ["id" => "edit-button","href" => "update_religion.php?$id=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_religion.php?$id=", "text" => "Eliminar", "active" => 1]
];

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $buttons, $id);

?>