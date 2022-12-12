<?php

require_once 'vendor/autoload.php';

session_start();

// init configuration
$clientID = '***';
$clientSecret = '***';
$redirectUri = 'https://yourdomain/welcome.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");


// Connect with the database
define("DB_HOST","***");
define("DB_USER","***");
define("DB_PASS","***");
define("DB_NAME","***");


date_default_timezone_set('Africa/Nairobi');


$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$conn){
    die("hey db not connected");
}

