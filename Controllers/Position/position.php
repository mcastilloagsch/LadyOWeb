<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "position.php";

$titulo = "Mantenedores de Posiciones";

$general_buttons = [
  ["href" => "new_position.php", "text" => "Agregar"]
];

$api_url = "APIPositionGetlist";

$objects = [ 
  [
    "label" => "ID",
    "key" => "IdPosition",
    "hidden" => 1
  ],
  [
    "label" => "Nombre",
    "key" => "PositionName",
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

$item_buttons = [
    ["id" => "edit-button","href" => "update_position.php?IdPosition=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_position.php?IdPosition=", "text" => "Eliminar", "active" => 1]
];
$id_key = "IdPosition";

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $item_buttons, $id_key);

?>