<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "region.php";

$titulo = "Mantenedores de Regiones";

$general_buttons = [
  ["href" => "new_region.php", "text" => "Agregar"]
];

$api_url = "APIRegionGetlist";
$id = "IdRegion";

$objects = [ 
  [
    "label" => "ID",
    "key" => $id,
    "hidden" => 1
  ],
  [
    "label" => "Nombre",
    "key" => "RegionName",
    "hidden" => 0
  ],
  [
    "label" => "OrderSec",
    "key" => "OrderSec",
    "hidden" => 1
  ],
  [
    "label" => "RegCod",
    "key" => "RegCod",
    "hidden" => 0
  ],
  [
    "label" => "Borrado",
    "key" => "IsDeleted",
    "hidden" => 1
  ]
];

$buttons = [
  ["id" => "edit-button","href" => "update_region.php?$id=", "text" => "Editar", "active" => 1],
  ["id" => "delete-button","href" => "delete_region.php?$id=", "text" => "Eliminar", "active" => 1]
];

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $buttons, $id);

?>