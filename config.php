<?php

require_once 'vendor/autoload.php';
include_once 'Common/functions.php';


session_start();
// init configuration
$clientID = PARAMGET('clientID');
$clientSecret = PARAMGET('clientSecret');
$redirectUri = PARAMGET('redirectUri');

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = PARAMGET('hostname');
$username = PARAMGET('username');
$password = PARAMGET('password');
$database = PARAMGET('database');

$conn = mysqli_connect($hostname, $username, $password, $database);
