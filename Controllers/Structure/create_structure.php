<?php
require_once '../authorization.php';
include_once '../../Common/functions.php';

$name = $_POST['name'];
$structure_type_id = $_POST['structure_type_id'];
$parent_id = $_POST['parent_id'];

$urlcreate = APIGET("APIStructuresObjInsert")."/{token}";
$curl = curl_init($urlcreate);

$objeto = array(
    "name" => $name,
    "structure_type_id" => $structure_type_id,
    "parent_id" => $parent_id,
  );

$jsonDataEncoded = json_encode($objeto);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($curl);
header("Location: structure.php");

?>