<?php

require_once 'vendor/autoload.php';

session_start();

// init configuration
$clientID = '929888836857-57tjlet7pmj1sn5mgcd4nqs2mhi886ap.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/PHP-Login-google/welcome.php';

// create Client Request to access Google API 
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "youtube-google-login";

$conn = mysqli_connect($hostname, $username, $password, $database);
