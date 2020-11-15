<?php

// Google API configuration
define('GOOGLE_CLIENT_ID', '61411318107-n48rdrq0ta9g0dgpr779ee1gvbt8j4ge.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', 'ujPPhoz__scERj1nqi8194Ao');
define('GOOGLE_REDIRECT_URL', 'http://localhost:8080/marketingojo/products');

// Start session
if(!session_id()){
    session_start();
}

// Include Google API client library
require_once 'google-api-php-client/Google_Client.php';
require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to coderglass.com');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_oauthV2 = new Google_Oauth2Service($gClient);

?>