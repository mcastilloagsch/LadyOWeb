<?php
include_once 'html_functions.php';
include_once 'functions.php';

function APIS_GET(){
  $config = file($_SERVER['DOCUMENT_ROOT'].'/bin/urls_api.config');
  foreach($config as $line){
    $values=explode(';',$line);
    $url[trim($values[0])] = trim($values[1]);
  }
  return $url;
}

function API_SEARCH($api,$urls){

  $API_ABS_PATH = PARAMGET('API_ABS_PATH');
  echo "<h3>Patron : $api </h3>\n";
  foreach($urls as $key => $url){
    if ( preg_match("/$api/",$key) == 1) {
      #echo "<h3> $key => $url </h3>\n";
      $urls_match[$key] = $API_ABS_PATH.$url;
    }
  }
  return $urls_match;
}

function test_Get_List($urls){
  $urls_api = API_SEARCH("Getlist",$urls);

  foreach($urls_api as $key => $curl_url){
    $json = file_get_contents($curl_url);
    $answer = json_decode($json,true);

    #foreach($answer["data"] as $i => $item){
    #  echo "<h3>".$i." = ".$item."</h3>\n";
    #}

    echo "<h3> $curl_url, count = ".count($answer["data"])."</h3>";
  }
}

$urls = APIS_GET();
head_html(0);
echo "<body>\n";
echo "<h1>TESTS</h1>\n";
test_Get_List($urls);
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