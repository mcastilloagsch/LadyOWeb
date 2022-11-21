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
$id = "IdCommune";

$objects = [ 
  [
    "label" => "ID",
    "key" => $id,
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
    "label" => "ComCod",
    "key" => "ComCod",
    "hidden" => 0
  ],
  [
    "label" => "Borrada",
    "key" => "IsDeleted",
    "hidden" => 1
  ]
];

$buttons = [
  ["id" => "edit-button","href" => "update_commune.php?$id=", "text" => "Editar", "active" => 1],
  ["id" => "delete-button","href" => "delete_commune.php?$id=", "text" => "Eliminar", "active" => 1]
];

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $buttons, $id);

?>