<?php
require_once '../vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('882413254155-dqrcsii5mp2f40vc0v4hhj0gkacp9n1q.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('xNA8IIyIJpOmlZ3ZgRvKX8qx');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://essay-lite.io/en/auth/login');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
