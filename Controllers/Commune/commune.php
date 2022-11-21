<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "commune.php";

$titulo = "Mantenedores de Comunas";

$general_buttons = [
  ["href" => "new_commune.php", "text" => "Agregar"]
];

$api_url = "APICommuneGetlist";

$objects = [ 
  [
    "label" => "ID",
    "key" => "IdCommune",
    "hidden" => 1
  ],
  [
    "label" => "ID Provincia",
    "key" => "IdProvince",
    "hidden" => 0
  ],
  [
    "label" => "Nombre Comuna",
    "key" => "CommuneName",
    "hidden" => 0
  ],
  [
    "label" => "Borrada",
    "key" => "IsDeleted",
    "hidden" => 1
  ]
];

$item_buttons = [
    ["id" => "edit-button","href" => "update_commune.php?IdCommune=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_commune.php?IdCommune=", "text" => "Eliminar", "active" => 1]
];

$id_key = "IdCommune";

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $item_buttons, $id_key);

?>