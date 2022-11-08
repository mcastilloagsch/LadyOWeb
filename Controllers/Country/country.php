<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "country.php";

$titulo = "Mantenedores de Paises";

$general_buttons = [
  ["href" => "new_country.php", "text" => "Agregar"]
];

$objects = [ 
  [
    "label" => "ID",
    "key" => "IdCountry",
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

$api_url = "APICountryGetlist";

$buttons = [
    ["id" => "delete-button","href" => "delete_country.php?IdCountry=", "text" => "Eliminar", "active" => 1],
    ["id" => "edit-button"  ,"href" => "update_country.php?IdCountry=", "text" => "Editar", "active" => 1]
];

$id_key = "IdCountry";

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $buttons, $id_key);

?>
