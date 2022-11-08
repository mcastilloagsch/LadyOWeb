<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "sexe.php";

$titulo = "Mantenedores de Sexos";

$general_buttons = [
  ["href" => "new_sexe.php", "text" => "Agregar"]
];

$api_url = "APISexGetlist";

$objects = [ 
  [
    "label" => "ID",
    "key" => "IdSex",
    "hidden" => 1
  ],
  [
    "label" => "Nombre",
    "key" => "SexName",
    "hidden" => 0
  ],
  [
    "label" => "Borrado",
    "key" => "IsDeleted",
    "hidden" => 1
  ]
];

$item_buttons = [
    ["id" => "edit-button","href" => "update_sexe.php?IdSex=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_sexe.php?IdSex=", "text" => "Eliminar", "active" => 1]
];

$id_key = "IdSex";

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $item_buttons, $id_key);

?>