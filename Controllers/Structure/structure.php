<?php 
require_once '../authorization.php';
include_once '../../Common/functions.php';
include_once '../../Common/html_functions.php';

$caller = "structure.php";

$titulo = "Mantenedores de Estructuras";

$general_buttons = [
  ["href" => "new_structure.php", "text" => "Agregar"]
];

$api_url = "APIStructureGetlist";

$objects = [ 
  [
    "label" => "ID",
    "key" => "IdStructure",
    "hidden" => 1
  ],
  [
    "label" => "IdStructureParent",
    "key" => "IdStructureParent",
    "hidden" => 0
  ],
  [
    "label" => "Direción",
    "key" => "Address",
    "hidden" => 0
  ],
  [
    "label" => "IdCommune",
    "key" => "IdCommune",
    "hidden" => 0
  ],
  [
    "label" => "IdStructureType",
    "key" => "IdStructureType",
    "hidden" => 0
  ],
  [
    "label" => "IdSocioEconomic",
    "key" => "IdSocioEconomic",
    "hidden" => 0
  ],
  [
    "label" => "Nombre",
    "key" => "StructureName",
    "hidden" => 0
  ],
  [
    "label" => "IdBranch",
    "key" => "IdBranch",
    "hidden" => 0
  ],
  [
    "label" => "SponsorName",
    "key" => "SponsorName",
    "hidden" => 0
  ],
  [
    "label" => "SponsorAddress",
    "key" => "SponsorAddress",
    "hidden" => 0
  ],
  [
    "label" => "SponsorDni",
    "key" => "SponsorDni",
    "hidden" => 0
  ],
  [
    "label" => "SponsorEmail",
    "key" => "SponsorEmail",
    "hidden" => 0
  ],
  [
    "label" => "SponsorPhone",
    "key" => "SponsorPhone",
    "hidden" => 0
  ],
  [
    "label" => "Borrado",
    "key" => "IsDeleted",
    "hidden" => 1
  ],
  [
    "label" => "LastModificationDate",
    "key" => "LastModificationDate",
    "hidden" => 1
  ],
  [
    "label" => "LastModificationPerson",
    "key" => "LastModificationPerson",
    "hidden" => 1
  ]
];

$buttons = [
    ["id" => "edit-button", "href" => "update_structure.php?IdStructure=", "text" => "Editar", "active" => 1],
    ["id" => "delete-button", "href" => "delete_structure.php?IdStructure=", "text" => "Eliminar", "active" => 1]
];
$id_key = "IdStructure";

controller_page_html($caller, $titulo, $general_buttons, $objects, $api_url, $buttons, $id_key);


?>