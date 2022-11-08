<?php

function print_debug($text,$debug){
  if ($debug == 1 ) {
    echo $text;
  }
}

function GET_PARAM_FILE($param, $file){
  $config = file($_SERVER['DOCUMENT_ROOT'].$file);

  foreach($config as $line){
    $values=explode(';',$line);
    $url[trim($values[0])] = trim($values[1]);
  } 
  if ( $url[$param] ) return $url[$param];
  else return "";
}


function PARAMGET($param){

  #$config = file('../../bin/param.config');
  return GET_PARAM_FILE($param,'/bin/param.config');
}

function APIGET($api){

  $API_ABS_PATH = PARAMGET('API_ABS_PATH');
  #$archivo = file('../../bin/urls_api.config');
  return $API_ABS_PATH.GET_PARAM_FILE($api,'/bin/urls_api.config');
}

function GET_CONTENTS($api_url){
  $API_URL=APIGET($api_url);

  $json = file_get_contents($API_URL);
  $data = json_decode($json,true);

  if ($data["isValid"] != true) {
    $data[ "isValid"] = false;
  }

  return $data;
}

function CURL_POST($api, $object, $location){
  $jsonDataEncoded = json_encode($object);
  $curl = curl_init(APIGET($api));

  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
  $result =  curl_exec($curl);
  header($location);

  return $result;
}

function CURL_DELETE($api, $object, $location){
  $jsonDataEncoded = json_encode($object);
  $curl = curl_init(APIGET($api));

  $jsonDataEncoded = json_encode($object);
  curl_setopt($curl, CURLOPT_URL,$curl);
  #curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
  curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($object)); 

  
  #curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  #curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
  #curl_setopt($curl, CURLOPT_HEADER, 0); 
  #curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  
  $result =  curl_exec($curl);
  header($location);

  return $result;
}

function CURL_PUT($api, $object, $location, $url_extra){
  $url = APIGET($api);

  if (!is_null($url_extra)){
    $url = $url.$url_extra;
  }

  $curl = curl_init($url);  
  $query = http_build_query($object);

  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
  curl_setopt($curl, CURLOPT_POSTFIELDS, $query);
  $result = curl_exec($curl);
  header($location);

  return $result;
}

?>
