<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$titulo = "Mantenedores de Paises";
$general_buttons = [
  ["id" => "new_country.php", "text" => "Agregar"]
];
$label_items = [ "ID Country","Nombre","Borrado"];
$api_url = "APICountryGetlist";
$keys = [ "IdCountry","CountryName","IsDeleted"];
$item_buttons = [
    ["id" => "edit-button","href" => "update_country.php?IdCountry=", "text" => "Editar"],
    ["id" => "delete-button","href" => "delete_country.php?IdCountry=", "text" => "Eliminar"]
];
$id_key = "IdCountry";

page_html($titulo,$general_buttons, $label_items, $api_url, $keys, $item_buttons, $id_key);

?>
