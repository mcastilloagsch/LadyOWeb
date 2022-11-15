<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "structure_type.php";

$titulo = "Mantenedores de Tipos de Estructuras";

$general_buttons = [
  ["href" => "new_structure_type.php", "text" => "Agregar"]
];

$api_url = "APIStructureTypeGetlist";

$objects = [ 
  [
    "label" => "ID",
    "key" => "IdStructureType",
    "hidden" => 1
  ],
  [
    "label" => "Nombre",
    "key" => "StructureTypeName",
    "hidden" => 0
  ],
  [
    "label" => "Borrado",
    "key" => "IsDeleted",
    "hidden" => 1
  ]
];

$item_buttons = [
    ["id" => "edit-button","href" => "update_structure_type.php?id=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_structure_type.php?id=", "text" => "Eliminar", "active" => 1]
];
$id_key = "id";

controller_page_html($caller, $titulo, $general_buttons, $label_items, $objects, $item_buttons, $id_key);

?>