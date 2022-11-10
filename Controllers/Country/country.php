<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "country.php";

$titulo = "Mantenedores de Paises";

$general_buttons = [
  ["href" => "new_country.php", "text" => "Agregar"]
];

$api_url = "APICountryGetlist";
$id = "IdCountry";

$objects = [ 
  [
    "label" => "ID",
    "key" => $id,
    "hidden" => 1
  ],
  [
    "label" => "Nombre",
    "key" => "CountryName",
    "hidden" => 0
  ],
  [
    "label" => "Borrado",
    "key" => "IsDeleted",
    "hidden" => 1
  ]
];

$buttons = [
    ["id" => "edit-button"  ,"href" => "update_country.php?$id=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button","href" => "delete_country.php?$id=", "text" => "Eliminar", "active" => 1]
];

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $buttons, $id);

?>
