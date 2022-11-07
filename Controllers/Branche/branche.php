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

$label_items = [ "ID","Nombre","Nombre Unidad","Pequeño Equipo"];

$keys = [ "id","name","unit_name","small_team"];

$objects = [ 
  [
    "label" => "ID",
    "key" => "id",
    "hidden" => 1
  ],
  [
    "label" => "Nombre",
    "key" => "name",
    "hidden" => 0
  ],
  [
    "label" => "Nombre Unidad",
    "key" => "unit_name",
    "hidden" => 0
  ],
  [
    "label" => "Pequeño Equipo",
    "key" => "small_team",
    "hidden" => 0
  ]
];


$item_buttons = [
    ["id" => "edit-button","href" => "update_branche.php?id=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_branche.php?id=", "text" => "Eliminar", "active" => 1]
];

$id_key = "id";

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $item_buttons, $id_key);

?>