<?php

include_once '../Common/functions.php';
include_once '../Common/html_functions.php';

function print_debug($text,$debug){
  if ($debug == 1 ) {
    echo $text;
  }
}

function get_objid($api,$urls,$obejct){
  $answer = GET_CONTENTS($api);
  $data_txt = $object["data_txt"];
  $data_value = $object[$data_txt];
  $id_txt = $object["id_txt"];

  foreach($answer["data"] as $key => $item ){
    if ($item[$data_txt] == $data_value){
      return $item[$id_txt];
    }
  }
  return -1;
}

function APIS_GET(){
  $config = file($_SERVER['DOCUMENT_ROOT'].'/bin/urls_api.config');
  foreach($config as $line){
    $values=explode(';',$line);
    $url[trim($values[0])] = trim($values[1]);
  }
  return $url;
}

function API_SEARCH($api,$urls,$debug){

  $API_ABS_PATH = PARAMGET('API_ABS_PATH');

  print_debug("<h3> Patron : $api,",$debug);
  $urls_match = array();
  print_debug(".",1);

  foreach($urls as $key => $url){
    
    print_debug("<h3> $key => $url ",$debug);
    if ( preg_match("/$api/",$key) == 1) {
      print_debug(", match",$debug);
      $urls_match[$key] = $API_ABS_PATH.$url;
    }
    print_debug("</h3>\n",$debug);
    
  }

  print_debug(count($urls_match)."</h3>\n",$debug);
  
  return $urls_match;
}

function testGetList($api,$url){
  $answer = GET_CONTENTS($api);

  echo "<h3> $api , $api : ";
  if ($answer["isValid"] == true ){
    echo "ok, count = ".count($answer["data"]);
    $salida = 1;
  }
  else{
    echo "fail";
    $salida = 0;
  }
  echo "</h3>\n";
  return $salida;
}

function testGetLists($urls){
  $urls_api = API_SEARCH("Getlist",$urls,0);

  foreach($urls_api as $api => $curl_url){
    $Getlists[$api] = testGetList($api, $curl_url);
  }
  return $Getlists;
}

function testIntsert($api,$object){

  $result = CURL_POST($api, $object,$location);
  return $result;
}

function APITests($API,$Getlists,$urls,$location,$texts){

  $objects = $texts[$API];

  echo "<h2> $API Test </h2>\n";
  $api_getlist="API".$API."Getlist";

  if ($Getlists[$api_getlist] ==1 ){
    
    $TestApis=API_SEARCH($API,$urls,1);

    if (count($TestApis) > 0) {
      
      # Test Insert
      $api_insert=API_SEARCH("Insert",$TestApis,1);
      if(count($api_insert) > 0){
        $object = $objects["Insert"];
        $result=testIntsert($api,$object,$location);
        print_debug($result,1);

        #get_objid($api,$urls,$id_txt,$data_txt,$data_value)
        $id = get_objid($api_getlist,$TestApis,$object);
        print_debug($id,1);
      }
      /*
      $api_get=API_SEARCH("get",$TestApis,0);
      $api_update=API_SEARCH("update",$TestApis,0);
      $api_delete=API_SEARCH("delte",$TestApis,0);
      */
      
    }
  }
  else{
    echo " SKIP";
  }
  echo "</h3>\n";
}

$texts = [
    "Branch" => [ 
        "Insert" => [
        "name" => "test",
        "unit_name" => "test_unit",
        "small_team" => "test_small_unit",
        "data_txt" => "name",
        "id_txt" => "id"
        ],
        "Update" => [],
        "Delete" => [],
        "Get" => [
          "id_txt" => "id"
        ]
    ],
    "Country" => [
      "Insert" => [
        "CountryName" => "country_test1",
        "id_txt" => "IdCountry",
        "data_txt" => "CountryName"
      ],
      "Update" => [
        "IdCountry" => $id,
        "CountryName" => $name,

      ],
      "Delete" => [],
      "Get" => [
        "id_txt" => "IdCountry"
      ]
    ]
];

$urls = APIS_GET();
head_html(0);
echo "<body>\n";
echo "<h1>TESTS</h1>\n";
$Getlists = testGetLists($urls);

APITests("Country",$Getlists,$urls,"Location: country.php",$texts);
echo "</body>\n";


/*
#LIST
$API_URL=APIGET($api_url);

    $json = file_get_contents($API_URL);
    $datos = json_decode($json,true);

    foreach ($datos["data"] as $clave => $value){


#INSERT
$name = $_POST['name'];
$unit_name = $_POST['unit_name'];
$small_team = $_POST['small_team'];
$token = $_SESSION['user_token'];

$objeto = array(
  "name" => $name,
  "unit_name" => $unit_name,
  "small_team" => $small_team,
);

$result = CURL_POST("APIBranchesObjInsert", $objeto,"Location: branche.php");

#UPDATE
$id = $_POST['id'];
$name = $_POST['name'];
$unit_name = $_POST['unit_name'];
$small_team = $_POST['small_team'];
$token = $_SESSION['user_token'];


$id = intval($id);

$objeto = array(
  "id" => $id,
  "name" => $name,
  "unit_name" => $unit_name,
  "small_team" => $small_team,
);

$result = CURL_PUT("APIBranchesObjUpdate", $objeto, "Location: branche.php", "");

#DELETE
$id = $_POST['IdCountry'];

$id = intval($id);

$objeto = array(
  "IdCountry" => $id
);

$result = CURL_DELETE("APICountryObjDelete", $objeto, "Location: country.php");
*/
?>