<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "province.php";

$titulo = "Mantenedores de Provincias";

$general_buttons = [
  ["href" => "new_province.php", "text" => "Agregar"]
];

$api_url = "APIProvinceGetlist";
$id = "IdProvince";

$objects = [ 
  [
    "label" => "ID",
    "key" => $id,
    "hidden" => 1
  ],
  [
    "label" => "ID Region",
    "key" => "IdRegion",
    "hidden" => 0
  ],
  [
    "label" => "Nombre",
    "key" => "ProvinceName",
    "hidden" => 0
  ],
  [
    "label" => "ProvCod",
    "key" => "ProvCod",
    "hidden" => 0
  ],
  [
    "label" => "Borrado",
    "key" => "IsDeleted",
    "hidden" => 1
  ]
];

$buttons = [
    ["id" => "edit-button","href" => "update_province.php?$id=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_province.php?$id=", "text" => "Eliminar", "active" => 1]
];

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $buttons, $id);

?>