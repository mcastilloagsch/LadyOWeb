<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "branche.php";

$titulo = "Mantenedores de Ramas";

$general_buttons = [
  ["href" => "new_branche.php", "text" => "Agregar"]
];

$api_url = "APIBranchGetlist";
$id = "IdBranch";

$objects = [ 
  [
    "label" => "ID",
    "key" => $id,
    "hidden" => 1
  ],
  [
    "label" => "Nombre",
    "key" => "BranchName",
    "hidden" => 0
  ],
  [
    "label" => "Nombre Unidad",
    "key" => "UnitName",
    "hidden" => 0
  ],
  [
    "label" => "Pequeño Equipo",
    "key" => "TeamName",
    "hidden" => 0
  ],
  [
    "label" => "Borrado",
    "key" => "IsDeleted",
    "hidden" => 1
  ]
];

$buttons = [
  ["id" => "edit-button","href" => "update_branche.php?$id=", "text" => "Editar", "active" => 1],
  ["id" => "delete-button","href" => "delete_branche.php?$id=", "text" => "Eliminar", "active" => 1]
];



controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $buttons, $id);

?>