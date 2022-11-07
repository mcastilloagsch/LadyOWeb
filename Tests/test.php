<?php

include_once '../Common/functions.php';
include_once '../Common/html_functions.php';


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
  echo "<h3>Patron : $api,";
  foreach($urls as $key => $url){
    if ( preg_match("/$api/",$key) == 1) {
      if ($debug == 1) {
        echo "<h3> $key => $url </h3>\n";
      }
      $urls_match[$key] = $API_ABS_PATH.$url;
    }
  }
  echo count($urls_match)."</h3>\n";
  return $urls_match;
}

function testGetList($api){
  $answer = GET_CONTENTS($api);

  echo "<h3> $api : ";
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
    $answer = GET_CONTENTS($api);
    $Getlists[$api] = testGetList($api);
  }
  return $Getlists;
}

function testIntsert($api,$object){

  $result = CURL_POST($api, $object,$location);
  echo $result;
}

function APITests($API,$Getlists,$location){
  echo "<h2> $API Test </h2>\n";
  $api_getlist="API".$API."Getlist";
  echo "<h3>";
  echo $Getlists[$api_getlist];
  echo ".";

  if ($Getlists[$api_getlist] ==1 ){
    
    $TestApis=API_SEARCH("API".$API,$Getlists,1);
    echo ".";
    echo count($TestApis);

    if (count($TestApis) > 0) {
      
      echo ".";
      $api_insert=API_SEARCH("insert",$TestApis,1);
  
      if(count($api_insert) > 0){
      
        echo ".";
        $object = array(
          "name" => "test",
          "unit_name" => "test_unit",
          "small_team" => "test_small_unit"
        );
      
        $result=testIntsert($api,$object,$location);
        echo $result;
      }
      
      $api_get=API_SEARCH("get",$TestApis,0);
      $api_update=API_SEARCH("update",$TestApis,0);
      $api_delete=API_SEARCH("delte",$TestApis,0);
    }
  }
  else{
    echo " SKIP";
  }
  echo "</h3>\n";
}

$urls = APIS_GET();
head_html(0);
echo "<body>\n";
echo "<h1>TESTS</h1>\n";
$Getlists = testGetLists($urls);
APITests("Branch",$Getlists,"Location: branche.php");
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