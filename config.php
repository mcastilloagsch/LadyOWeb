<?php

require_once 'vendor/autoload.php';

session_start();
//read file param.config
$file = fopen( 'bin/param.config', "r");
$param = array();

while (!feof($file)) {
    $param[] = fgetcsv($file,null,';');
}
fclose($file);
// init configuration
$clientID = $param[0][1];
$clientSecret = $param[1][1];
$redirectUri = $param[2][1];

// create Client Request to access Google API 
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = $param[3][1];
$username = $param[4][1];
$password = $param[5][1];
$database = $param[6][1];

$conn = mysqli_connect($hostname, $username, $password, $database);