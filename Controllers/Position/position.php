<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "position.php";

$titulo = "Mantenedores de Posiciones";

$general_buttons = [
  ["href" => "new_position.php", "text" => "Agregar"]
];

$api_url = "APIPositionTypeGetlist";
$id ="IdPositionType";

$objects = [ 
  [
    "label" => "ID",
    "key" => $id,
    "hidden" => 1
  ],
  [
    "label" => "Nombre",
    "key" => "PositionTypeName",
    "hidden" => 0
  ],
  [
    "label" => "Tipo de estructura",
    "key" => "IdStructureType",
    "hidden" => 0
  ],
  [
    "label" => "Borrado",
    "key" => "IsDeleted",
    "hidden" => 1
  ]
];

$buttons = [
  ["id" => "edit-button","href" => "update_position.php?$id=", "text" => "Editar", "active" => 1],
  ["id" => "delete-button","href" => "delete_position.php?$id=", "text" => "Eliminar", "active" => 1]
];

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $buttons, $id);

?>