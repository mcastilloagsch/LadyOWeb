<?php
function GET_PARAM_FILE($param, $file){
  $config = file($file);

  foreach($config as $line){
    $values=explode(';',$line);
    $url[trim($values[0])] = trim($values[1]);
  }

  if ( $url[$param] ) return $url[$param];
  else return "";
}


function PARAMGET($param){

  #$config = file('../../bin/param.config');
  return GET_PARAM_FILE($param,'bin/param.config');
}

function APIGET($api){

  #$archivo = file('../../bin/urls_api.config');
  return GET_PARAM_FILE($api,'bin/urls_api.config');
}

?>
