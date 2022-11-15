<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "socioeconomic.php";

$titulo = "Mantenedores de Socio Economico";

$general_buttons = [
  ["href" => "new_socioeconomic.php", "text" => "Agregar"]
];

$api_url = "APISocioeconomicsGetlist";

$objects = [ 
  [
    "label" => "ID",
    "key" => "IdSocioEconomic",
    "hidden" => 1
  ],
  [
    "label" => "Nombre",
    "key" => "SocioEconomicName",
    "hidden" => 0
  ],
  [
    "label" => "Borrado",
    "key" => "IsDeleted",
    "hidden" => 1
  ]
];

$item_buttons = [
    ["id" => "edit-button","href" => "update_socioeconomic.php?id=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_socioeconomic.php?id=", "text" => "Eliminar", "active" => 1]
];

$id_key = "id";

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $item_buttons, $id_key);

?>
